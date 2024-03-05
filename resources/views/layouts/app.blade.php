<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Flatpickr JS -->
    <script src="{{ asset('js/flatpickr.js') }}"></script>
    @stack('scripts')
</body>
</html>
