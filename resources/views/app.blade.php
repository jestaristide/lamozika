<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia


        <script src="{{ asset('admin/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- Vendor JS -->
        <script src="{{ asset('admin/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

        <!-- Slider -->
        <script src="{{ asset('admin/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

        <!-- Jarallax -->
        <script src="{{ asset('admin/vendor/jarallax/dist/jarallax.min.js') }}"></script>

        <!-- Smooth scroll -->
        <script src="{{ asset('admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

        <!-- Count up -->
        <script src="{{ asset('admin/vendor/countup.js/dist/countUp.umd.js') }}"></script>

        <!-- Notyf -->
        <script src="{{ asset('admin/vendor/notyf/notyf.min.js') }}"></script>

        <!-- Charts -->
        <script src="{{ asset('admin/vendor/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

        <!-- Datepicker -->
        <script src="{{ asset('admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

        <!-- Simplebar -->
        <script src="{{ asset('admin/vendor/simplebar/dist/simplebar.min.js') }}"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Volt JS -->
        <script src="{{ asset('admin/assets/js/volt.js') }}"></script>


    </body>
</html>
