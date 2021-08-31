<div>
  <section id="page-account-settings">
    <div class="row">
      <!-- left menu section -->
      <div class="col-md-3 mb-2 mb-md-0">
        <ul class="nav nav-pills flex-column nav-left">
          <!-- general -->
          <li class="nav-item">
            <a
              class="nav-link active"
              id="account-pill-general"
              data-bs-toggle="pill"
              href="#account-vertical-general"
              aria-expanded="true"
            >
              <i data-feather="user" class="font-medium-3 me-1"></i>
              <span class="fw-bold">General</span>
            </a>
          </li>
          <!-- information -->
          <li class="nav-item">
            <a
              class="nav-link"
              id="account-pill-info"
              data-bs-toggle="pill"
              href="#account-vertical-info"
              aria-expanded="false"
            >
              <i data-feather="info" class="font-medium-3 me-1"></i>
              <span class="fw-bold">Information</span>
            </a>
          </li>
        </ul>
      </div>
      <!--/ left menu section -->

      <!-- right content section -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <!-- general tab -->
              <div
                role="tabpanel"
                class="tab-pane active"
                id="account-vertical-general"
                aria-labelledby="account-pill-general"
                aria-expanded="true"
              >
                <!-- header section -->
                <div class="d-flex">
                  <a href="#" class="me-25">
                    @if ($avatar)
                      <img
                        src="{{ $avatar->temporaryUrl() }}"
                        id="avatar-img"
                        class="rounded me-50"
                        alt="avatar image"
                        height="80"
                        width="80"
                      />
                    @else
                      <img
                        src="{{asset('images/portrait/small/avatar-s-11.jpg')}}"
                        class="rounded me-50"
                        alt="profile image"
                        height="80"
                        width="80"
                      />
                    @endif
                  </a>
                  <!-- upload and reset button -->
                  <form wire:submit.prevent="saveAvatar">
                  <div class="mt-75 ms-1">
                    <label for="avatar" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                    <input type="file" id="avatar" name="avatar" wire:model="avatar" hidden accept="image/*" />
                    <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                    <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                    @error('avatar') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  </form>
                  <!--/ upload and reset button -->
                </div>
                <!--/ header section -->

                <!-- form -->
                <form wire.submit.prevent="storeUserGeneral" class="validate-form mt-2">
                  @csrf
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="mb-1">
                      <x-label class="form-label" for="username">Username</x-label>
                      <input wire:model="username"
                        type="text"
                        class="form-control"
                        id="username"
                        name="username"
                        placeholder="Username"
                      />
                      @error('username') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="mb-1">
                      <label class="form-label" for="password">Password</label>
                      <input wire:model="password"
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Password"
                      />
                      @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="mb-1">
                      <label class="form-label" for="account-e-mail">E-mail</label>
                      <input wire:model="email"
                        type="email"
                        class="form-control"
                        id="account-e-mail"
                        name="email"
                        placeholder="Email"
                        value="granger007@hogward.com"
                      />
                      @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="mb-1">
                      <label class="form-label" for="selectRole">Role</label>
                      {!! Form::select('role',$roleArr,null,['class' => 'form-select','id' => 'selectRole','wire:model' => 'role']) !!}
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-2 me-1">Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                  </div>
                </div>
                </form>
              <!--/ form -->
              </div>
              <!--/ general tab -->

              <!-- information -->
              <div
                class="tab-pane fade"
                id="account-vertical-info"
                role="tabpanel"
                aria-labelledby="account-pill-info"
                aria-expanded="false"
              >
                <!-- form -->
                <form class="validate-form">
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-1">
                        <label class="form-label" for="accountTextarea">Bio</label>
                        <textarea
                          class="form-control"
                          id="accountTextarea"
                          rows="4"
                          placeholder="Your Bio data here..."
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label" for="account-birth-date">Birth date</label>
                        <input
                          type="text"
                          class="form-control flatpickr"
                          placeholder="Birth date"
                          id="account-birth-date"
                          name="dob"
                        />
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label" for="accountSelect">Country</label>
                        <select class="form-select" id="accountSelect">
                          <option>USA</option>
                          <option>India</option>
                          <option>Canada</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label" for="account-website">Website</label>
                        <input
                          type="text"
                          class="form-control"
                          name="website"
                          id="account-website"
                          placeholder="Website address"
                        />
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label" for="account-phone">Phone</label>
                        <input
                          type="text"
                          class="form-control"
                          id="account-phone"
                          placeholder="Phone number"
                          value="(+656) 254 2568"
                          name="phone"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                      <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                    </div>
                  </div>
                </form>
                <!--/ form -->
              </div>
              <!--/ information -->
            </div>
          </div>
        </div>
      </div>
      <!--/ right content section -->
    </div>
  </section>
</div>
@push('page-script')
  <script>
    let file = document.querySelector('input[type="file"]').files[0];
    console.log(file);

    // Upload a file:
    @this.upload('avatar', file, (uploadedFilename) => {
      // Success callback.
      console.log(uploadedFilename);
    }, (error) => {
      // Error callback.
      console.log(error)
    }, (event) => {
      console.log(event)
      // Progress callback.
      // event.detail.progress contains a number between 1 and 100 as the upload progresses.
    })

    // Upload multiple files:
    // @this.uploadMultiple('photos', [file], successCallback, errorCallback, progressCallback)

    // Remove single file from multiple uploaded files
    // @this.removeUpload('photos', uploadedFilename, successCallback)
  </script>
@endpush
