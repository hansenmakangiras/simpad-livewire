<!-- Add Role Modal -->
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
        <h5 class="modal-title" id="addRole">Tambah Tipe Akses</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="storeRole" class="form form-vertical">
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="mb-1">
                <label class="form-label" for="first-name-icon">Tipe Akses</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i data-feather="lock"></i></span>
                  <input wire:model="tipeakses"
                         type="text"
                         id="tipe-akses"
                         class="form-control"
                         name="tipe-akses"
                         placeholder="Tipe Akses"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
