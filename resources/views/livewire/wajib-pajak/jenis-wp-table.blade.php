<div>
  <!-- Jenis Wajib pajak table list start -->
  <section class="basic-vertical-layout app-user-list">
    <!-- list section start -->
    <div class="row">
      <div class="col-md-12">
        <!-- alert start -->
        @if (session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="alert-body">
              <strong>Sukses!!</strong>
              {{ session('message') }}
            </div>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
          </div>
        @elseif (session()->has('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="alert-body">
              <strong>Kesalahan!!</strong>
              {{ session('error') }}
            </div>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      <!-- alert end -->
      </div>
      <div class="col-md-4 col-12">
        <x-card>
          <x-card-header class="card-header">
            <h4 class="card-title">Tambah Jenis Pajak</h4>
          </x-card-header>
          <x-card-body class="card-body">
            @if(!$updateMode)
              <form wire:submit.prevent="createJenisPajak" class="form form-vertical validate-form">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="first-name-vertical">Jenis Pajak</label>
                      <input wire:model="nama_jenis_wp" type="text" id="nama-jenis-pajak" class="form-control" name="nama_jenis_wp" placeholder="Jenis Pajak">
                      @error('nama_jenis_pajak') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Simpan</button>
                  </div>
                </div>
              </form>
            @endif
          </x-card-body>
        </x-card>
      </div>
      <div class="col-md-8 col-12">
        <x-card>
          <div class="card-header">
            <div x-data="{cardTitle: '{{ $cardTitle }}'}" class="card-title">
              <h6 class="card-title" x-text="cardTitle"></h6>
            </div>
{{--            <div class="text-end">--}}
{{--              <div class="d-inline-flex">--}}
{{--                <x-nav-link class="btn btn-primary" href="{{ route('jenis-objek-pajak.create') }}">--}}
{{--                  <i class="fas fa-user-plus"></i>--}}
{{--                  <span class="ms-50">Tambah</span>--}}
{{--                </x-nav-link>--}}
{{--              </div>--}}
{{--            </div>--}}
          </div>
          <!-- Card Datatable Start -->
          <div class="d-flex d-inline justify-content-between align-items-center mx-0 row pb-1">

            <!-- Per Page Start -->
            <div class="col-md-3">
              <div class="mb-0 ">
                <div class="input-group" id="perPage">
                  <span class="input-group-text border-0">Tampilkan </span>
                  <x-select class="form-select" wire:model="perPage">
                    <option value=10>10</option>
                    <option value=25>25</option>
                    <option value=50>50</option>
                    <option value=75>75</option>
                    <option value=100>100</option>
                  </x-select>
                </div>
              </div>
            </div>
            <!-- Per Page End -->

            <!-- Bulk Action Start -->
            <div class="col-md">
              <div class="mb-0">
                <div class="input-group">
                  @if($checked)
                    <x-dropdown>
                      <x-button class="btn-sm btn-outline-success me-50" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bulk Action <span class="badge rounded-pill bg-danger">{{ count($checked) }}</span>
                      </x-button>
                      <x-dropdown-item>
                        <x-nav-link wire:click="$emit('triggerDelete','deleteBulk','bulk')" class="dropdown-item">
                          <i class="far fa-trash-alt"></i>
                          {{--                      <i data-feather="trash" class="me-50"></i>--}}
                          <span class="align-middle">Delete</span>
                        </x-nav-link>
                        <x-nav-link wire:click="$emit('triggerEksport','eksport','bulk')" class="dropdown-item">
                          <i class="far fa-file-excel"></i>
                          {{--                      <i data-feather="edit-2" class="me-50"></i>--}}
                          <span class="align-middle">Eksport</span>
                        </x-nav-link>
                      </x-dropdown-item>
                    </x-dropdown>
                  @endif
                </div>
              </div>
            </div>
            <!-- Bulk Action End -->

            <!-- Search Start -->
            <div class="col-md align-items-end">
              <div class="mb-0">
                <div class="input-group">
                  <span class="input-group-text border-0" id="search">Pencarian</span>
                  <input type="search" wire:model.debounce.500ms="search" class="form-control" id="search" placeholder="Cari jenis pajak">
                </div>
              </div>
            </div>
            <!-- Search End -->
          </div>
          <!-- Table Start -->
          <x-table class="user-list-table table">
            <x-table.table-head>
              <th width="2%"><input type="checkbox" class="form-check" wire:model="selectAll" /></th>
              <th width="10%">Jenis Wajib Pajak</th>
              <th width="1%">Action</th>
            </x-table.table-head>
            <x-table.table-body>
              @forelse($jenisWp as $wp)
                <tr class="@if($this->isChecked($wp->id)) bg-light-primary @endif">
                  <th width="5%">
                    <input value="{{ $wp->id }}" type="checkbox" class="form-check" wire:model="checked" wire.key="{{ $wp->id }}" />
                  </th>
                  <td>{{ $wp->nama_jenis_wp }}</td>
                  <td>
                    <div class="dropdown">
                      <div wire:ignore>
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                          <i data-feather="more-vertical"></i>
                        </button>

                        <div class="dropdown-menu">
                          <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editjenispajak-modal">
                            <i data-feather="edit-2" class="me-50"></i>
                            <span>Ubah</span>
                          </button>
                          <a class="dropdown-item" wire:click="$emit('triggerDelete',{{ $wp->id }},'single')">
                            <i data-feather="trash" class="me-50"></i>
                            <span>Hapus</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3" class="text-center text-danger">Data tidak ditemukan</td>
                </tr>
              @endforelse
            </x-table.table-body>
          </x-table>
          <!-- Table End -->

          <!-- Pagination Start -->
          <x-pagination>
            {{ $jenisWp->links() }}
          </x-pagination>
          <!-- Pagination End -->
        </x-card>
      </div>
    </div>
    <!-- list section end -->
  </section>
  <!-- jenis pajak list ends -->
</div>

<!-- Modal to add new jenis pajak starts-->
<x-modal class="text-start" id="editjenispajak-modal">
  <x-slot name="modalTitle">
    <h4 class="modal-title" id="myModalLabel33">Edit Jenis Pajak</h4>
  </x-slot>
  <form wire:submit.prevent="updateJenisPajak" class="form form-vertical">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="mb-1">
          <label class="form-label" for="first-name-vertical">Jenis Pajak</label>
          <input wire:model="nama_jenis_wp" type="text" id="nama-jenis-pajak" value="" class="form-control" name="nama_jenis_wp" placeholder="Jenis Pajak">
        </div>
      </div>
      <x-slot name="modalFooter">
        <button type="reset" class="btn btn-primary me-1 waves-effect waves-float waves-light">Simpan</button>

      </x-slot>
    </div>
  </form>
</x-modal>
<!-- Modal to add new user Ends-->

@push('page-script')
  <!--suppress JSJQueryEfficiency -->
  <script>
    if (feather) {
      feather.replace({});
    }
    document.addEventListener('DOMContentLoaded', function () {
    @this.on('triggerDelete', (id, tipe) => {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        customClass: {
          confirmButton: 'btn btn-primary',
          cancelButton: 'btn btn-outline-danger ms-1'
        },
        buttonsStyling: false
      }).then(function (result) {
        if (result.value) {
          let del = @this.call('delete', id, tipe);
          if (del) {
            Swal.fire({
              icon: 'success',
              title: 'Deleted!',
              text: 'Record berhasil dihapus.',
              customClass: {
                confirmButton: 'btn btn-success'
              }
            })
          } else {
            Swal.fire({
              icon: 'danger',
              title: 'Failed!',
              text: 'Record gagal dihapus.',
              customClass: {
                confirmButton: 'btn btn-success'
              }
            })
          }
        } else {
          Swal.fire({
            title: 'Batal menghapus!',
            icon: 'success'
          });
        }
      })
    })
    });
  </script>
@endpush
