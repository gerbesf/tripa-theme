{{-- Example of Backend Global  --}}
@extends('tripa-theme::backend')
@section('header-logo')
    Exemple
@endsection
@section('header-usermenu')
    <a class="dropdown-item d-flex align-items-center" href="{{ env('URL_AUTH') }}">Voltar<i class="fa fa-arrow-left fa-fw ml-auto text-gray-400 f-s-16"></i></a>
    <div class="dropdown-divider"></div>
@endsection
@section('sidebar')
    @include('layout.partials.sidebar')
@endsection
@section('content')
    @yield('main')
@endsection
