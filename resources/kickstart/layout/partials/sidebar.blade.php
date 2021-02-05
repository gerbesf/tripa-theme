
<div class="menu-header">Configurações</div>
<div class="menu-item {{ str_contains(request()->url(), '/config') ? 'active' : '' }}">
    <a href="{{ route('config') }}" class="menu-link">
        <span class="menu-icon"><i class="fa fa-cog"></i></span>
        <span class="menu-text">Config</span>
    </a>
</div>
{{--
<div class="menu-item {{ str_contains(request()->url(), '/integracoes') ? 'active' : '' }}">
    <a href="{{ route('integracoes') }}" class="menu-link">
        <span class="menu-icon"><i class="fa fa-link"></i></span>
        <span class="menu-text">Integrações</span>
    </a>
</div>
--}}
