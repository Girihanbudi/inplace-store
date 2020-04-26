<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inplace') }} | Modern Clothing Brand </title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="/shopresource/winkel/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/shopresource/winkel/css/animate.css">
    
    <link rel="stylesheet" href="/shopresource/winkel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/shopresource/winkel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/shopresource/winkel/css/magnific-popup.css">

    <link rel="stylesheet" href="/shopresource/winkel/css/aos.css">

    <link rel="stylesheet" href="/shopresource/winkel/css/ionicons.min.css">

    <link rel="stylesheet" href="/shopresource/winkel/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/shopresource/winkel/css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="/shopresource/winkel/css/flaticon.css">
    <link rel="stylesheet" href="/shopresource/winkel/css/icomoon.css">
    <link rel="stylesheet" href="/shopresource/winkel/css/style.css">
    
  </head>

  <body class="goto-here">
    @include('shop.navbar')

    @yield('content')
    
    @include('shop.footer')
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{ asset('shopresource/winkel/js/jquery.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/popper.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/aos.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/scrollax.min.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/google-map.js')}}"></script>
    <script src="{{ asset('shopresource/winkel/js/main.js')}}"></script>
    
  </body>
</html>