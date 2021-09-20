<div>
  <!-- roles list start -->
  <section class="app-user-list">
    <!-- list section start -->
    <x-card>
      <div class="card-header">
        <div x-data="{cardTitle: '{{ $cardTitle }}'}" class="card-title">
          <h6 class="card-title" x-text="cardTitle"></h6>
        </div>
        <div class="text-end">
          <div class="d-inline-flex">
            <x-nav-link class="btn btn-danger me-50" href="{{ route('hak-akses.create') }}">
              <i class="fas fa-lock"></i>
              <span class="ms-50">Tambah Hak Akses</span>
            </x-nav-link>
            <x-nav-link data-bs-toggle="modal" wire:click.prevent="addNew" class="btn btn-primary">
              <i class="fas fa-user-plus"></i>
              <span class="ms-50">Tambah Tipe Akses</span>
            </x-nav-link>
          </div>
        </div>
      </div>
      <!-- Card Datatable Start -->
      <div class="d-flex d-inline justify-content-between align-items-center mx-0 row pb-1">
        <!-- Per Page Start -->
        <div class="col-md">
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
              <span class="input-group-text border-0">Baris </span>
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

        <div class="col-md align-items-end">
          <div class="mb-0">
            <div class=" col-md-12">
              {{--              <span class="input-group-text border-0" id="search">Search</span>--}}
              <input type="search" wire:model.debounce.500ms="search" class="form-control" id="search" placeholder="Cari hak akses atau tipe akses">
            </div>
          </div>
        </div>
      </div>

    {{--      <x-card-datatable class="card-datatable table-responsive pt-0">--}}
    <!-- Table Start -->
      <x-table class="user-list-table table table-striped">
        <x-table.table-head>
          <tr>
            {{--                        <th width="2%"><input type="checkbox" class="form-check" wire:model="selectAll" /></th>--}}
            <th width="10%">Roles</th>
            <th width="85%">Permissions</th>
            <th width="5%">Action</th>
          </tr>
        </x-table.table-head>
        <x-table.table-body>
          @forelse($roles as $role)
            <tr>
              {{--                            <td></td>--}}
              <td>{{ $role->name }}</td>
              <td>
                @forelse($role->permissions()->get() as $perm)
                  <span class="badge badge-light-success">
                                        {{ $perm->name }}
                                    </span>
                @empty
                  <p class="text-danger text-center">-- Hak Akses Belum ditentukan. --</p>
                @endforelse
              </td>
              <td>
                <div class="dropdown">
                  <div wire:ignore>
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                      <i data-feather="more-vertical"></i>
                    </button>

                    <div class="dropdown-menu">
                      <a wire:key="{{ $role->id }}" wire:click.prevent="edit({{ $role }})" class="dropdown-item">
                        <i data-feather="edit-2" class="me-50"></i>
                        <span>Edit</span>
                      </a>
                      <a class="dropdown-item" wire:click="$emit('triggerDelete',{{ $role->id }},'single')">
                        <i data-feather="trash" class="me-50"></i>
                        <span>Delete</span>
                      </a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="6">Data tidak ditemukan</td>
            </tr>
          @endforelse
        </x-table.table-body>
      </x-table>
      <!-- Table End -->
      <div class="col-12 col-md-12 col-sm-6">
        <ul class="pagination justify-content-center mt-2">
          {{ $roles->links() }}
        </ul>
      </div>
      <!-- Card Datatable End -->
    </x-card>
    <!-- list section end -->
  </section>
  <!-- roles list ends -->
  <!-- Add Role Modal start -->
  <div
    class="modal fade"
    id="addRole"
    tabindex="-1"
    aria-labelledby="addRole"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="modalTitle">
            @if($showEditModal)
            <span>Ubah Tipe Akses</span>
            @else
            <span>Tambah Tipe Akses</span>
            @endif
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <form wire:submit.prevent="{{ $showEditModal ? 'updateRole' : 'createRole' }}" class="form form-vertical">
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div class="mb-1">
                    <label class="form-label" for="first-name-icon">Tipe Akses</label>
                    <div wire:ignore class="input-group input-group-merge">
                      <span class="input-group-text"><i data-feather="lock"></i></span>
                      <input wire:model.defer="name"
                             type="text"
                             id="tipe-akses"
                             name="name"
                             class="form-control @error('name') is-invalid @enderror"
                             placeholder="Tipe Akses"
                      />
                      @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                  @if($showEditModal)
                    <span>Update</span>
                  @else
                    <span>Simpan</span>
                  @endif
                </button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
  <!-- Add Role Modal end -->

</div>
<!-- <div class="position-fixed top-0 end-0 p-2">
</div> -->
<!-- Basic toast ends -->
{{--@include('account.roles.partials.modal',['tipeakses'])--}}
@push('page-script')
  <!--suppress JSJQueryEfficiency -->
  <script>
    if (feather) {
      feather.replace({});
    }

    window.addEventListener('closeModal', event => {
      $('#addRole').modal('hide');
      if(event.detail.success){
        toastr['success']('👋 ' + event.detail.message, 'Sukses!', {
          closeButton: true,
          tapToDismiss: false
        });
      }else{
        toastr['error']('👋 ' + event.detail.message, 'Kesalahan!', {
          closeButton: true,
          tapToDismiss: false
        });
      }
    })

    window.addEventListener('openModal', event => {
      $('#addRole').modal('show');
    })

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
