<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Themefisher">
    <link rel="shortcut icon" href="{{ asset('front/images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('front/images/logo.png') }}" type="image/x-icon">

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/solid.css') }}">

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <style>
        .fl-wrapper {
            position: fixed !important;
            bottom: 20px;
            /* Distance from bottom */
            right: 20px;
            /* Distance from right */
            top: auto !important;
            /* Override top */
            z-index: 9999 !important;
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: red !important;
        }
    </style>
</head>

<body>
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')
    <!-- # JS Plugins -->
    <script src="{{ asset('front/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/plugins/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('front/js/script.js') }}"></script>

</body>

</html>
