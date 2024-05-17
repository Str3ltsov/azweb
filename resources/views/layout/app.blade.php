<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('other.websiteDescription') }}">
    <meta name="keywords" content="azweb, az web">
    <meta name="robots" content="noindex, follow">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/images/favicon.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    @hasSection('title')
        <title>
            @yield('title', __('inputs.title')) - {{ config('app.name', 'AZWeb') }}
        </title>
    @else
        <title>{{ config('app.name', 'AZWeb') }}</title>
    @endif
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    {{--    <link href="{{ asset('build/assets/app-67dcdfd2.css') }}" rel="stylesheet"> --}}
    {{--    <link href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.css') }}" rel="stylesheet"> --}}
    {{--    <link href="{{ asset('fontawesome-free-6.3.0-web/css/all.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('template/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/sss/plugins/odometer-theme-default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/magnific-pupup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/custom.css') }}">
    @stack('styles')
</head>

<body style="height: 100%;">
    @include('layout.components.header')
    @include('layout.components.off_canvas')
    @if (request()->is('pages/*') || request()->url() == route('contacts'))
        @include('layout.components.breadcrumb')
    @endif
    @yield('content')
    @include('layout.components.footer')
    @include('layout.components.scroll_top')
    <!-- Scripts -->
    {{--    <script src="{{ asset('build/assets/app-20b9e4fb.js') }}"></script> --}}
    {{--    <script src="{{ asset('jquery-3.6.3/jquery-3.6.3.min.js') }}"></script> --}}
    {{--    <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.bundle.js') }}"></script> --}}
    {{--    <script src="{{ asset('ckeditor5-36.0.1-8lty87utdzw3/build/ckeditor.js') }}"></script> --}}
    {{--    <script src="{{ asset('fontawesome-free-6.3.0-web/js/all.js') }}"></script> --}}
    <script src="{{ asset('template/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('template/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('template/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('template/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/magnificpopup.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/easypiechart.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/odometer.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/isotope.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/waypoint.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/fancybox.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/parallax.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    <script src="{{ asset('template/js/pages/home.js') }}"></script>
    @stack('scripts')
</body>

</html>
