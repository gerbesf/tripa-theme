<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }} | {{ env('APP_VERSION') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="{{ asset('vendor/tripa-theme/css/app.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/vanilla-masker@1.1.1/lib/vanilla-masker.js"></script>
    <livewire:styles />
</head>
<body>
<div id="app" class="app app-full-height app-without-header">

    @yield('content')

</div>

<script src="{{ asset('vendor/tripa-theme//js/app.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}?{{ date('YmdH') }}"></script>
<livewire:scripts />
@yield('js-footer')
</body>
</html>
