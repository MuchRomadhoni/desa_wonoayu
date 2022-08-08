<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title') Desa Plinggisan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('/logodesa.png')}}" rel="icon">
    <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('/lib/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @include('component.nav')

    @yield('content')

    @include('component.footer')


    <!-- JavaScript Libraries -->
    <script src="{{asset('/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/lib/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/lib/lightbox/js/lightbox.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('js/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('/js/js/main.js')}}"></script>
</body>
