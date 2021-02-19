
@if( strlen(trim($__env->yieldContent('sidebar'))) or strlen(trim($__env->yieldContent('sidebar-menu'))))
    <div id="sidebar" class="app-sidebar">
        @if (trim($__env->yieldContent('sidebar')))
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                <div class="menu">
                    @yield('sidebar')
                </div>
            </div>
            <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
        @else
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                <div class="menu">
                    @yield('sidebar-menu')
                </div>
            </div>
            <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
        @endif
    </div>
@else
    <style> .app-content { margin-left: auto!important; }</style>
@endif
