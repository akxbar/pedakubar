<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>PEDA KTNA KALTIM XI Tahun 2025</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/style.css">
    <link rel="stylesheet" class="page-highlight" type="text/css"
        href="{{ asset('frontend') }}/styles/highlights/highlight_green.css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/fonts/css/fontawesome-all.min.css">
    <link rel="manifest" href="{{ asset('frontend') }}/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend') }}/app/icons/icon-192x192.png">
    <link rel="icon" href="{{ url('frontend/images/pictures/logokubar.png') }}">
</head>

<body class="theme-light" data-highlight="blue2">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <!-- header and footer bar go here-->

        @include('app.partial._header')

        @include('app.partial._menu')
        @yield('content')
        <!-- end of page content-->



        <!-- Be sure this is on your main visiting page, for example, the index.html page-->
        <!-- Install Prompt for Android -->
        {{-- <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l"
            data-menu-height="350" data-menu-effect="menu-parallax">
            <div class="boxed-text-l mt-4">
                <img class="rounded-l mb-3" src="{{ asset('frontend') }}/app/icons/icon-128x128.png" alt="img"
                    width="90">
                <h4 class="mt-3">sipedakubar on your Home Screen</h4>
                <p>
                    Install sipedakubar on your home screen, and access it just like a regular app. It really is that
                    simple!
                </p>
                <a href="#"
                    class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to
                    Home Screen</a><br>
                <a href="#"
                    class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Maybe
                    later</a>
                <div class="clear"></div>
            </div>
        </div> --}}
    </div>

    <script type="text/javascript" src="{{ asset('frontend') }}/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/scripts/custom.js"></script>

</body>
