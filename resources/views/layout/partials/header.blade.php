
<div id="header" class="app-header">
    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
    <div class="brand">
        <div class="desktop-toggler">
            <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
        <a href="{{ route('admin_index') }}" class="brand-logo">
            @if (trim($__env->yieldContent('header-logo')))
                @yield('header-logo')
            @else
                <img src="{{asset('vendor/tripa-theme/img/logo.png')}}" alt="" height="20" />
            @endif
        </a>
        @env('local')<span class="pr-lg-3">{{ env('APP_VERSION') }}D</span>@endenv
        @production<span class="pr-lg-3">{{ env('APP_VERSION') }}</span>@endproduction
    </div>
    <div class="menu">
        <div class="menu-search" >
            @yield('header-menu')
        </div>
        <div class="menu-item dropdown ">
            <a href="#" data-toggle="dropdown" data-display="static" class="menu-link">
                <div class="menu-img online">
                    <div class="d-flex align-items-center justify-content-center w-100 h-100 bg-gray-800 text-gray-300 rounded-circle overflow-hidden">
                        <i class="fa fa-user fa-2x mb-n3"></i>
                    </div>
                </div>
                <div class="menu-text">{{ \Tripa::getUserName() }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right mr-lg-3">
                @yield('header-usermenu')
                <a class="dropdown-item d-flex align-items-center" href="{{ env('URL_AUTH') }}/my-account">Minha conta <i class="fa fa-wrench fa-fw ml-auto text-gray-400 f-s-16"></i></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item d-flex align-items-center" href="/logout">Sair<i class="fa fa-toggle-off fa-fw ml-auto text-gray-400 f-s-16"></i></a>
            </div>
        </div>
    </div>
</div>
