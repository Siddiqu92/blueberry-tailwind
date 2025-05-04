<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blueberry - Multi Purpose eCommerce Template.">
    <meta name="keywords" content="eCommerce, mart, apparel, catalog, fashion, Tailwind, multipurpose, online store, shop, store, template">
    <title>@yield('title', 'Blueberry - eCommerce Tailwind CSS template')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.png') }}" type="image/x-icon">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery-range-ui.css') }}">

    <!-- Tailwind CSS -->
    <script src="{{ asset('assets/js/vendor/tailwindcss3.4.5.js') }}"></script>

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('head')
</head>
<body>

    {{-- Loader --}}
    @yield('loader')

    {{-- Header --}}
    @yield('header')

    <main id="main">

        {{-- Hero Section (Home only) --}}
        @yield('hero')

        {{-- Breadcrumb (Used in About Us, Shop, etc.) --}}
        @yield('breadcrumb')

        {{-- Categories --}}
        @yield('categories')

        {{-- Deal of Day --}}
        @yield('deal-of-day')

        {{-- Banner One --}}
        @yield('banner-one')

        {{-- Banner Two --}}
        @yield('banner-two')

        {{-- Products --}}
        @yield('products')

        {{-- About Section --}}
        @yield('about')

        {{-- Services --}}
        @yield('services')

        {{-- Vendors --}}
        @yield('vendors')

        {{-- Testimonials --}}
        @yield('testimonials')

        {{-- Team --}}
        @yield('team')

        {{-- Blog --}}
        @yield('blog')

        {{-- Instagram --}}
        @yield('instagram')

    </main>

    {{-- Footer --}}
    @yield('footer')

    {{-- Cart Sidebar --}}
    @yield('cart-sidebar')

    {{-- Category Popup --}}
    @yield('category-popup')

    {{-- Quick View --}}
    @yield('quick-view')

    {{-- Newsletter Modal --}}
    @yield('newsletter-modal')

    {{-- Tools Sidebar --}}
    @yield('tools-sidebar')

    {{-- Back to Top --}}
    @yield('back-to-top')

    {{-- Global Scripts --}}
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/countdownTimer.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-range-ui.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- Additional Page Scripts --}}
    @stack('scripts')

</body>
</html>
