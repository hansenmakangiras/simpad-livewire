<?php

namespace App\Http\Livewire\HakAkses;

use App\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class RoleTable extends Component
{
  use WithPagination;
  use AuthorizesRequests;

  protected string $paginationTheme = 'bootstrap';

  public string $defaultSort = 'id';
  public int $perPage = 10;
  public string $selectedRole = '';
  public string $search = '';
  public array $selectedPermission = [];
  public array $checked = [];
  public bool $isChecked = false;
  public string $cardTitle = 'Data Hak Akses';
  public array $listPermission = ['create', 'read', 'update', 'delete'];
  public bool $showEditModal = false;
  public $name;
  public $role;

  protected array $rules = [
    'name' => 'required',
  ];

  public function addNew()
  {
    $this->showEditModal = false;
    $this->openModal();
    $this->resetInput();
  }

  public function edit(Role $role)
  {
    $this->showEditModal = true;
    $this->name = $role->name;
    $this->role = $role;
    $this->openModal(['role' => $this->name]);
  }

  private function resetInput()
  {
    $this->reset('name');
  }

  public function createRole()
  {
    $data = ['success' => 'false', 'message' => 'Tipe akses gagal di tambahkan'];
    $validatedData = $this->validate();

    $create = Role::create($validatedData);
    if($create){
      $this->resetInput();
      $data['success'] = true;
      $data['message'] = 'Tipe akses berhasil ditambahkan';
    }

    $this->closeModal($data);
  }

  public function updateRole()
  {
    $data = ['success' => false, 'message' => 'Tipe akses gagal di tambahkan'];
    $validatedData = $this->validate();

    $update = $this->role->update($validatedData);

    if($update){
      $this->resetInput();
      $data['success'] = true;
      $data['message'] = 'Tipe akses berhasil ditambahkan';
    }

    $this->closeModal($data);
  }

  private function closeModal($options = false)
  {
    $options = ($options && is_array($options)) ? $options : [];
    $this->dispatchBrowserEvent('closeModal', $options);
  }

  private function openModal($options = false)
  {
    $options = ($options && is_array($options)) ? $options : [];
    $this->dispatchBrowserEvent('openModal', $options);
  }

  public function isChecked($userid): bool
  {
    return in_array($userid, $this->checked);
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  /**
   * @throws \Throwable
   */
  public function delete($id)
  {
    return Role::findOrFail($id)->deleteOrFail();
  }

  public function render()
  {
    $roles = Role::with(['permissions'])
      ->search(trim($this->search))
      ->orderBy($this->defaultSort)
      ->paginate($this->perPage);

    return view('livewire.hak-akses.role-table')->with([
      'roles' => $roles,
    ]);
  }
}
