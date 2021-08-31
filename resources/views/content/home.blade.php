<x-app-layout>
  @push('vendor-style')
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}"/>
  @endpush

  @push('page-style')
{{--    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}"/>--}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}"/>
  @endpush

  @section('title', 'Dashboard')

  <section id="dashboard-ecommerce">
    <div class="row match-height">
      <!-- Medal Card -->
      <x-medal-card class="col-xl-4 col-md-6 col-12">
        <x-card class="card card-congratulation-medal">
          <x-card-body>
            <h5>Congratulations 🎉 John!</h5>
            <p class="card-text font-small-3">You have won gold medal</p>
            <h3 class="mb-75 mt-2 pt-50">
              <x-nav-link href="#">$48.9k</x-nav-link>
            </h3>
            <x-button type="button" class="btn btn-primary">View Sales</x-button>
            <img src="{{ asset('images/illustration/badge.svg') }}" class="congratulation-medal" alt="Medal Pic"/>
          </x-card-body>
        </x-card>
      </x-medal-card>
      <!--/ Medal Card -->

      <!-- Statistics Card -->
      <livewire:statistik-dashboard/>
      <!--/ Statistics Card -->
    </div>

    <div class="row match-height">
      <!-- Company Table Card -->
      <div class="col-lg-12 col-12">
        <div class="card card-company-table">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table">
                <thead>
                <tr>
                  <th>Objek Pajak</th>
                  <th>Category</th>
                  <th>Views</th>
                  <th>Revenue</th>
                  <th>Sales</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{ asset('images/icons/toolbox.svg') }}" alt="Toolbar svg"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Dixons</div>
                        <div class="font-small-2 text-muted">meguc@ruj.io</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Technology</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">23.4k</span>
                      <span class="font-small-2 text-muted">in 24 hours</span>
                    </div>
                  </td>
                  <td>$891.2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">68%</span>
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{ asset('images/icons/parachute.svg') }}" alt="Parachute svg"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Motels</div>
                        <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <i data-feather="coffee" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Grocery</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">78k</span>
                      <span class="font-small-2 text-muted">in 2 days</span>
                    </div>
                  </td>
                  <td>$668.51</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">97%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{ asset('images/icons/brush.svg') }}" alt="Brush svg"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Zipcar</div>
                        <div class="font-small-2 text-muted">davcilse@is.gov</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">162</span>
                      <span class="font-small-2 text-muted">in 5 days</span>
                    </div>
                  </td>
                  <td>$522.29</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">62%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{ asset('images/icons/star.svg') }}" alt="Star svg"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Owning</div>
                        <div class="font-small-2 text-muted">us@cuhil.gov</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Technology</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">214</span>
                      <span class="font-small-2 text-muted">in 24 hours</span>
                    </div>
                  </td>
                  <td>$291.01</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">88%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{ asset('') }}images/icons/book.svg" alt="Book svg"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Cafés</div>
                        <div class="font-small-2 text-muted">pudais@jife.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <i data-feather="coffee" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Grocery</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">208</span>
                      <span class="font-small-2 text-muted">in 1 week</span>
                    </div>
                  </td>
                  <td>$783.93</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">16%</span>
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{ asset('images/icons/rocket.svg') }}" alt="Rocket svg"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Kmart</div>
                        <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">990</span>
                      <span class="font-small-2 text-muted">in 1 month</span>
                    </div>
                  </td>
                  <td>$780.05</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">78%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{ asset('') }}images/icons/speaker.svg" alt="Speaker svg"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Payers</div>
                        <div class="font-small-2 text-muted">luk@izug.io</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">12.9k</span>
                      <span class="font-small-2 text-muted">in 12 hours</span>
                    </div>
                  </td>
                  <td>$531.49</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">42%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!--/ Company Table Card -->

    </div>
    {{--    <livewire:dashboard/>--}}
  </section>

  @push('vendor-script')
{{--        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"/>--}}
  @endpush

  @push('page-script')
{{--        <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"/>--}}
    <script>
      $(window).on('load', function () {
        'use strict';

        // On load Toast
/*        setTimeout(function () {
          toastr['success'](
            'You have successfully logged in to Vuexy. Now you can start to explore!',
            '👋 Welcome John Doe!',
            {
              closeButton: true,
              tapToDismiss: false,
              rtl: isRtl
            }
          );
        }, 2000);*/

        if (feather) {
          feather.replace({
            width: 14,
            height: 14
          });
        }
      })
    </script>
  @endpush
</x-app-layout>



