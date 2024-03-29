<!DOCTYPE html>
<html lang="en">
<head>

    {{-- All Assets --}}

    <meta charset="utf-8">
    <meta name="description" content="Grow Jobs">
    <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no"><!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}"><!-- PWA primary color-->
    <meta name="theme-color" content="#303030">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><!-- Facebook-->
    <meta property="author" content="Devlife">
    <meta property="og:site_name" content="alexstrap.ux-maestro.com">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website"><!-- Twitter-->
    <meta property="twitter:site" content="luxi.ux-maestro.com">
    <meta property="twitter:domain" content="luxi.ux-maestro.com">
    <meta property="twitter:creator" content="luxi">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:image:src" content="./assets/images/logo.png">
    <meta property="og:url" content="alexstrap.ux-maestro.com/movie">
    <meta property="og:title" content="Layanan Informasi Lowongan Magang">
    <meta property="og:description" content="Grow Job - Layanan Informasi Lowongan Magang">
    <meta name="twitter:site" content="alexstrap.ux-maestro.com/movie">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ asset('images/movie-logo.png')}}">
    <meta property="og:image" content="{{ asset('images/movie-logo.png')}}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <title>@yield('webTitle') </title><!-- Styles-->
    
    <!-- Put the 3rd/plugins css here-->
    <link href="{{ asset('css/vendors/normalize.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/jquery.youtubebackground.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/materialize.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/hamburger-menu.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/jquery.animateSlider.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/animate-extends.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/slick-carousel/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('css/vendors/slick-carousel/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/grow.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
</head>
<body>
    @yield('webContent')

    <script src="{{ asset('js/vendors/jquery.min.js')}}"></script>
    <script src="{{ asset('js/vendors/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/vendors/enquire.min.js')}}"></script>
    <script src="{{ asset('js/vendors/jquery.enllax.min.js')}}"></script>
    <script src="{{ asset('js/vendors/jquery.form-validator.min.js')}}"></script>
    <script src="{{ asset('js/vendors/jquery.touchSwipe.min.js')}}"></script>
    <script src="{{ asset('js/vendors/jquery.youtubebackground.js')}}"></script>
    <script src="{{ asset('js/vendors/pace.min.js')}}"></script>
    <script src="{{ asset('js/vendors/slick.min.js')}}"></script>
    <script src="{{ asset('js/vendors/wow.min.js')}}"></script>
    <script src="{{ asset('js/vendors/jquery.navScroll.min.js')}}"></script>
    <script src="{{ asset('js/vendors/parallax.min.js')}}"></script><!-- This assets are not avalaible in npm.js or it has been costumized-->
    <script src="{{ asset('js/vendors/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <script src="{{ asset('js/vendors/materialize.js')}}"></script>
    <script src="{{ asset('js/vendors/jquery.animateSlider.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> --}}

    <script>
        AOS.init();
      </script>
</body>
</html>