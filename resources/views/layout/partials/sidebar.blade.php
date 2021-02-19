
<div id="sidebar" class="app-sidebar">
    @if (trim($__env->yieldContent('sidebar')))

        @yield('sidebar')

    @else

        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
            <div class="menu">

                @yield('sidebar-menu')

            </div>
        </div>

        <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>

    @endif

</div>
