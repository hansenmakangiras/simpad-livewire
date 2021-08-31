<div>
  <!-- users list start -->
  <section class="app-user-list">
    <!-- users filter start -->
    @if($filter)
      <x-card class="mb-1">
        <x-card-content class="justify-content-start align-items-start mx-25 row pt-1 pb-1">
          <x-card-item class="col-md-1 user_role">
            <x-select wire:model="perPage">
              <option value=10>10</option>
              <option value=20>20</option>
              <option value=50>50</option>
              <option value=100>100</option>
            </x-select>
          </x-card-item>
          <x-card-item class="col-md-2 user_role">
            <x-select wire:model="selectedStatus">
              <option value="">Filter By Status</option>
              <option value="true">Active</option>
              <option value="false">Inactive</option>
            </x-select>
          </x-card-item>
          <x-card-item class="col-md-2 user_plan">
            <x-select wire:model="selectedRole">
              <option value="">Filter By Role</option>
              @foreach($roles as $role)
                <option wire:key="{{ $role->id }}" value={{ $role->name }}>{{ $role->name }}</option>
              @endforeach
            </x-select>
          </x-card-item>
          <x-card-item class="col-md-3 user_search">
            <x-input class="form-text" placeholder="Search..." name="search" wire:model="search"></x-input>
          </x-card-item>
          @if($checked)
            <x-card-item class="col-md-2 with_checked">
              <x-dropdown>
                <x-button @click="toggle" class="btn-sm btn-success" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Bulk Action <span class="badge rounded-pill bg-danger">{{ count($checked) }}</span>
                </x-button>
                <x-dropdown-item>
                  <x-nav-link wire:click="$emit('triggerDelete','deleteBulk','bulk')" class="dropdown-item">
                    <i data-feather="trash" class="font-small-4 me-50"></i>
                    <span class="align-middle">Delete</span>
                  </x-nav-link>
                  <x-nav-link wire:click="$emit('triggerEksport','eksport','bulk')" class="dropdown-item">
                    <i data-feather="excel" class="font-small-4 me-50"></i>
                    <span class="align-middle">Eksport</span>
                  </x-nav-link>
                </x-dropdown-item>
              </x-dropdown>
            </x-card-item>
          @endif
          <x-card-item class="col-md-2 add-new-user ">
            <x-nav-link class="btn btn-primary" href="{{ route('pengguna.create') }}">Add New User</x-nav-link>
          </x-card-item>
        </x-card-content>
      </x-card>
  @endif
  <!-- users filter end -->

    <!-- list section start -->
    <x-card>
      <div class="card-header">
        <div x-data="{cardTitle: '{{ $cardTitle }}'}" class="card-title">
          <h6 class="card-title" x-text="cardTitle"></h6>
        </div>
        <div class="text-end">
          <div class="d-inline-flex">
            <x-nav-link class="btn btn-danger me-50" href="{{ route('pengguna.create') }}">
              <i class="fas fa-file-excel"></i>
              <span class="ms-50">Eksport Excel</span>
            </x-nav-link>
            <x-nav-link class="btn btn-primary" href="{{ route('pengguna.create') }}">
              <i class="fas fa-user-plus"></i>
              <span class="ms-50">Tambah</span>
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
              <span class="input-group-text border-0" id="selectPage">Show </span>
              <x-select class="form-select-sm" wire:model="perPage">
                <option value=10>10</option>
                <option value=25>25</option>
                <option value=50>50</option>
                <option value=75>75</option>
                <option value=100>100</option>
              </x-select>
              <span class="input-group-text" id="selectPage">Entries </span>
            </div>
          </div>
        </div>
        <!-- Per Page End -->

        <!-- Filter status start -->
        <div class="col-md align-items-end">
          <div class="mb-0">
            <div class="input-group col-md-6">
              <span class="input-group-text" id="search">Status</span>
              <x-select class="form-select-sm" wire:model="selectedStatus">
                <option value="">Filter By Status</option>
                <option value="true">Active</option>
                <option value="false">Inactive</option>
              </x-select>
            </div>
          </div>
        </div>
        <!-- Filter status end -->

        <!-- Filter Role Start -->
        <div class="col-md align-items-end">
          <div class="mb-0">
            <div class="input-group col-md-6">
              <span class="input-group-text" id="search">Role</span>
              <x-select class="form-select-sm" wire:model="selectedRole">
                <option value="">Filter By Role</option>
                @foreach($roles as $role)
                  <option wire:key="{{ $role->id }}" value={{ $role->name }}>{{ $role->name }}</option>
                @endforeach
              </x-select>
            </div>
          </div>
        </div>
        <!-- Filter Role End -->

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
                      <span class="align-middle">Delete</span>
                    </x-nav-link>
                    <x-nav-link wire:click="$emit('triggerEksport','eksport','bulk')" class="dropdown-item">
                      <i class="far fa-file-excel"></i>
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
            <div class="input-group col-md-6">
              <span class="input-group-text" id="search">Search</span>
              <input type="search" class="form-control form-control-sm" id="search" placeholder="Cari username, email, role  atau nik">
            </div>
          </div>
        </div>
      </div>

    {{--      <x-card-datatable class="card-datatable table-responsive pt-0">--}}
    <!-- Table Start -->
      <x-table class="user-list-table table">
        <x-table.table-head>
          <th width="2%"><input type="checkbox" class="form-check" wire:model="selectAll" /></th>
          <th width="10%">Username</th>
          <th width="10%">Email</th>
          <th width="5%">Akses</th>
          <th width="5%">Status</th>
          <th width="1%">Action</th>
        </x-table.table-head>
        <x-table.table-body>
          @foreach($users as $u)
            <tr class="@if($this->isChecked($u->id)) bg-light-primary @endif">
              <th width="5%">
                <input @if($u->id === 1) 'aria-disabled="true" disabled' @endif value="{{ $u->id }}" type="checkbox" class="form-check" wire:model="checked" wire.key="{{ $u->id
                }}" />
              </th>
              <td>{{ $u->username }}</td>
              <td>{{ $u->email }}</td>
              <td>
                @foreach($u->roles as $role)
                  <span class="badge rounded-pill badge-glow badge-light-{{ $u->is_admin ? 'warning' : 'success' }} rounded">
                      {{ $role->name }}
                    </span>
                @endforeach
              </td>
              <td>
                    <span class="badge rounded-pill badge-glow badge-light-{{ $u->status ? 'success' : 'danger' }} rounded">
                      {{ $u->status ? 'Active' : 'Inactive' }}
                    </span>
              </td>
              <td>
                <div class="dropdown">
                  <div wire:ignore>
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                      <i data-feather="more-vertical"></i>
                      {{--                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>--}}
                    </button>

                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">
                        <i data-feather="edit-2" class="me-50"></i>
                        <span>Edit</span>
                      </a>
                      <a class="dropdown-item" wire:click="$emit('triggerDelete',{{ $u->id }},'single')">
                        <i data-feather="trash" class="me-50"></i>
                        <span>Delete</span>
                      </a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </x-table.table-body>
      </x-table>
      <!-- Table End -->
      <div class="col-12 col-md-12 col-sm-6">
        <ul class="pagination justify-content-center mt-2">
          {{ $users->links() }}
        </ul>

      </div>
    {{--      </x-card-datatable>--}}
    <!-- Card Datatable End -->

      <!-- Modal to add new user starts-->
      <x-modal class="text-start" id="adduser-modal">
        <x-slot name="modalTitle">
          <h4 class="modal-title" id="myModalLabel33">Tambah Pengguna</h4>
        </x-slot>
        <form action="#">
          <div class="modal-body">
            <label>Email: </label>
            <div class="mb-1">
              <input type="text" placeholder="Email Address" class="form-control" />
            </div>

            <label>Password: </label>
            <div class="mb-1">
              <input type="password" placeholder="Password" class="form-control" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Login</button>
          </div>
        </form>
      </x-modal>
      <!-- Modal to add new user Ends-->
    </x-card>
    <!-- list section end -->
  </section>
  <!-- users list ends -->
</div>

@push('page-script')
  <!--suppress JSJQueryEfficiency -->
  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('dropdown', () => ({
        open: false,

        toggle() {
          this.open = !this.open
        }
      }))
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


