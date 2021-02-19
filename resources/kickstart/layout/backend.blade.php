{{-- Example of Backend Global  --}}
@extends('tripa-theme::backend')
@section('header-logo')
    Exemple
@endsection
@section('sidebar')
    @include('layout.partials.sidebar')
@endsection
@section('content')
    @yield('main')
@endsection
