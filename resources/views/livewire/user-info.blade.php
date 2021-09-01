<div>
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
</div>
