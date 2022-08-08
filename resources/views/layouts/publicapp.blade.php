<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('Title') Desa Plinggisan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="logodesa.png" rel="icon">
    <link href="frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="frontend/lib/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/lib/animate/animate.min.css" rel="stylesheet">
    <link href="frontend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="frontend/css/style.css" rel="stylesheet">
</head>

<body>
    @include('component.nav')

    @yield('content')

    @include('component.footer')


    <!-- JavaScript Libraries -->
    <script src="frontend/lib/jquery/jquery.min.js"></script>
    <script src="frontend/lib/jquery/jquery-migrate.min.js"></script>
    <script src="frontend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/lib/easing/easing.min.js"></script>
    <script src="frontend/lib/mobile-nav/mobile-nav.js"></script>
    <script src="frontend/lib/wow/wow.min.js"></script>
    <script src="frontend/lib/waypoints/waypoints.min.js"></script>
    <script src="frontend/lib/counterup/counterup.min.js"></script>
    <script src="frontend/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="frontend/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="frontend/lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="frontend/js/main.js"></script>
</body>
