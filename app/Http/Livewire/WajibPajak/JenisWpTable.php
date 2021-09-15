<?php

namespace App\Http\Livewire\WajibPajak;

use App\Models\JenisWajibPajak;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class JenisWpTable extends Component
{
  use WithPagination;
  use AuthorizesRequests;

  protected string $paginationTheme = 'bootstrap';

  public $jenisWajibPajak;
  public bool $filter = false;
  public bool $sort = false;
  public string $defaultSort = 'id';
  public int $perPage = 10;
  public string $search = '';
  public array $checked = [];
  public bool $isChecked = false;
  public string $cardTitle = 'List Jenis Pajak';
  public bool $selectAll = false;
  public bool $bulkDisabled = true;
  public bool $updateMode = false;

  public $nama_jenis_wp;

  public $listeners = [];

  protected function rules()
  {
    return [
      'nama_jenis_wp' => 'required',
    ];
  }

  public function mount()
  {
    $this->jenisWajibPajak = new JenisWajibPajak();
  }

  public function updatingSearch()
  {
    $this->resetPage();
  }

  public function createJenisPajak()
  {
    $this->validate();
    JenisWajibPajak::create($this->validate());
    session()->flash('message', 'Jenis Wajib Pajak berhasil ditambahkan.');
    return redirect()->route('jenis-wajib-pajak.index');
  }
//
//  public function created()
//  {
//    $this->reset('nama_jenis_wp');
//  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function editJenisPajak()
  {
    $this->updateMode = true;
  }

  public function delete($id, $tipe): ?bool
  {
//    $this->authorize('delete', $this->checked);
    if ($tipe === 'bulk') {
      $user = JenisWajibPajak::whereKey($this->checked)->delete();
      $this->checked = [];
      session()->flash('message', 'Jenis Wajib Pajak berhasil dihapus.');

      return $user;
    } else {
      session()->flash('message', 'Jenis Wajib Pajak berhasil dihapus.');
      return JenisWajibPajak::findOrFail($id)->delete();
    }
  }

  public function updatedSelectAll($value)
  {
    if ($value) {
      $this->checked = JenisWajibPajak::query()
        ->where('id', '!=', 1)
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

  public function render()
  {
    $jenisWp = JenisWajibPajak::search(trim($this->search))
      ->orderBy($this->defaultSort)
      ->paginate($this->perPage);

    return view('livewire.wajib-pajak.jenis-wp-table',compact('jenisWp'));
  }
}
