<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }} @if (trim($__env->yieldContent('page_title')))  -   @yield('page_title')   @endif</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="{{ asset('vendor/tripa-theme/css/app.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    @yield('css-header')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-masker@1.1.1/lib/vanilla-masker.js"></script>
    @livewireStyles
    @yield('js-header')
</head>
<body>
<div id="app" class="app app-xsidebar-minified">

    @include("tripa-theme::layout.partials.modal-events")
    @include("tripa-theme::layout.partials.header")
    @include("tripa-theme::layout.partials.sidebar")

    <div id="content" class="app-content">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </div>
    @if(env('COPYRIGHT'))
        <div id="app" class="app app-footer-fixed">
            <div id="footer" class="app-footer">
                {{ env('APP_COPYRIGHT') }}
            </div>
        </div>
    @endif

    <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="{{ asset('vendor/tripa-theme//js/app.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
@yield('js-footer')
</body>
</html>
