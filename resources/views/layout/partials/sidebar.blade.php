
<div id="sidebar" class="app-sidebar">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <div class="menu-header ">Menu</div>
            <div class="menu-item {{ str_contains(request()->url(), '/index') ? 'active' : '' }}">
                <a href="{{ route('admin_index') }}" class="menu-link ">
                    <span class="menu-icon"><i class="fa fa-home"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>

            @yield('sidebar')

        </div>
    </div>

    <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
</div>
