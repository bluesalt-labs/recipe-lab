<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>
        @if(View::hasSection('base_title')) @yield('base_title')
        @elseif(View::hasSection('title')) @yield('title') | {{ config('app.name', 'Laravel') }}
        @else {{ config('app.name', 'Laravel') }} @endif
    </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
@stack('scripts')

<!-- Styles -->
    @stack('styles')
</head>
<body id="page-body">
@yield('base-content')
</body>
</html>
