<?php

namespace App\Http\Livewire;

use App\Exports\UsersExport;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UserTable extends Component
{
  use WithPagination;
  use AuthorizesRequests;

  protected string $paginationTheme = 'bootstrap';

  public bool $filter = false;
  public bool $sort = false;
  public string $defaultSort = 'id';
  public int $perPage = 10;
  public bool $filterByStatus = false;
  public string $selectedRole = '';
  public string $search = "";
  public $sections = null;
  public $selectedStatus = null;
  public array $checked = [];
  public bool $isChecked = false;
  public string $cardTitle = 'Data Pengguna';
  public bool $selectAll = false;
  public bool $bulkDisabled = true;

  public $listeners = [];

  public function updatingSearch()
  {
    $this->resetPage();
  }

  public function delete($id, $tipe): ?bool
  {
    $this->authorize('delete', $this->checked);
    if ($tipe === 'bulk') {
      $user = User::whereKey($this->checked)->delete();
      $this->checked = [];
      return $user;
    } else {
      return User::findOrFail($id)->delete();
    }
  }

  public function updatedSelectAll($value)
  {
    if ($value) {
      $this->checked = User::query()
        ->when($this->selectedRole, function ($q) {
          $q->role($this->selectedRole);
        })
        ->when($this->selectedStatus, function ($q) {
          $q->where('status', $this->selectedStatus);
        })
        ->where('id','!=', 1)
        ->pluck('id')
        ->forPage($this->page, $this->perPage)
        ->toArray();
    } else {
      $this->checked = [];
    }
  }

  public function isChecked($userid): bool
  {
    return in_array($userid, $this->checked);
  }

  /**
   * @throws \PhpOffice\PhpSpreadsheet\Exception
   * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
   */
  public function export(): BinaryFileResponse
  {
    return Excel::download(new UsersExport, 'users.xlsx');
  }


  public function render()
  {
    $users = User::with([ 'info' ])
      ->search(trim($this->search))
      ->when($this->selectedRole, function ($q) {
        $q->role($this->selectedRole);
      })
      ->when($this->selectedStatus, function ($q) {
        $q->where('status', $this->selectedStatus);
      })
      ->orderBy($this->defaultSort)
      ->paginate($this->perPage);
    $roles = Role::all();

    return view('livewire.user-table', [
      'users' => $users,
      'roles' => $roles
    ]);
  }

}
