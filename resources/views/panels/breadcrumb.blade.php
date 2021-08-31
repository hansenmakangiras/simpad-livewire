<x-content-header>
  <div class="content-header-left col-md-9 col-12 mb-2">
    <x-breadcrumb class="breadcrumbs-top">
      <div class="col-12">
        <h2 class="content-header-title float-start mb-0">@yield('title')</h2>
        <div class="breadcrumb-wrapper">
          @if(@isset($breadcrumbs))
            <ol class="breadcrumb">
              {{-- this will load breadcrumbs dynamically from controller --}}
              @foreach ($breadcrumbs as $breadcrumb)
                <li class="breadcrumb-item">
                  @if(isset($breadcrumb['link']))
                    <a href="{{ $breadcrumb['link'] == 'javascript:void(0)' ? $breadcrumb['link']:url($breadcrumb['link']) }}">
                      @endif
                      {{$breadcrumb['name']}}
                      @if(isset($breadcrumb['link']))
                    </a>
                  @endif
                </li>
              @endforeach
            </ol>
          @endisset
        </div>
      </div>
    </x-breadcrumb>
  </div>
  <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
    <x-breadcrumb class="mb-1 breadcrumb-right">
      <x-dropdown>
        <x-button class="btn-icon btn-primary btn-round btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <x-icon data-feather="grid"></x-icon>
        </x-button>
        <x-dropdown-item>
          <x-nav-link class="dropdown-item" href="#">
            <i class="me-1" data-feather="check-square"></i>
            <span class="align-middle">Todo</span>
          </x-nav-link>
          <x-nav-link class="dropdown-item" href="#">
            <i class="me-1" data-feather="message-square"></i>
            <span class="align-middle">Chat</span>
          </x-nav-link>
          <x-nav-link class="dropdown-item" href="#">
            <i class="me-1" data-feather="mail"></i>
            <span class="align-middle">Email</span>
          </x-nav-link>
          <x-nav-link class="dropdown-item" href="#">
            <i class="me-1" data-feather="calendar"></i>
            <span class="align-middle">Calendar</span>
          </x-nav-link>
        </x-dropdown-item>
      </x-dropdown>
    </x-breadcrumb>
  </div>
</x-content-header>
