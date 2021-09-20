<body
  class="vertical-layout vertical-menu-modern {{ $configData['verticalMenuNavbarType'] }} {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }} {{ $configData['sidebarClass'] }} {{ $configData['footerType'] }} {{$configData['contentLayout']}}"
  data-open="click"
  data-menu="vertical-menu-modern"
  data-col="{{$configData['showMenu'] ? $configData['contentLayout'] : '1-column' }}"
  data-framework="laravel"
  data-asset-path="{{ asset('/')}}">

<!-- BEGIN: Header-->
@include('panels.navbar')
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
@if((isset($configData['showMenu']) && $configData['showMenu'] === true))
  @include('panels.sidebar')
@endif
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content {{ $configData['pageClass'] }}">
  <!-- BEGIN: Header-->
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>

  @if(($configData['contentLayout']!=='default') && isset($configData['contentLayout']))
    <div class="content-area-wrapper {{ $configData['layoutWidth'] === 'boxed' ? 'container-xxl p-0' : '' }}">
      <div class="{{ $configData['sidebarPositionClass'] }}">
        <div class="sidebar">
          {{-- Include Sidebar Content --}}
          @yield('content-sidebar')
        </div>
      </div>
      <div class="{{ $configData['contentsidebarClass'] }}">
        <div class="content-wrapper">
          <div class="content-body">
            {{-- Include Page Content --}}
            {{--@yield('content') --}}
            {{ $slot }}
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="content-wrapper {{ $configData['layoutWidth'] === 'boxed' ? 'container-xxl p-0' : '' }}">
      {{-- Include Breadcrumb --}}
      @if($configData['pageHeader'] === true && isset($configData['pageHeader']))
        @include('panels.breadcrumb')
      @endif

      <div class="content-body">
        {{-- Include Page Content --}}
        {{-- @yield('content') --}}
        {{ $slot }}
      </div>
    </div>
  @endif

</div>
<!-- End: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
{{-- include footer --}}
@include('panels/footer')

@livewireScripts
{{-- include default scripts --}}
@include('panels/scripts')

<script type="text/javascript">
  $(window).on('load', function () {
    if (feather) {
      feather.replace({
        width: 14, height: 14
      });
    }
  })
</script>

@if(config('app.env') ===  'production')
  @if(config('custom.alpinejs-version2'))
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
  @else
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  @endif
@else
  @if(config('custom.alpinejs-version2'))
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  @else
    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/trap@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @endif
@endif

</body>
</html>
