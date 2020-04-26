<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Inplace') }} | Admin Dashboard </title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">
        <!-- Bootstrap Css -->
        <link href="{{ asset('adminresource/assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('adminresource/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('adminresource/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('admin.navbar')
            
            @include('admin.sidebar')

            @yield('content')
            
            @extends('admin.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        
        {{-- @include('admin/layouts/right-sidebar') --}}

        <!-- Scripts -->
        <script src="{{ asset('adminresource/assets/js/app.js') }}" defer></script>

        <!-- JAVASCRIPT -->        
        <script src="{{ asset('adminresource/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('adminresource/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('adminresource/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('adminresource/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('adminresource/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('adminresource/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('adminresource/assets/js/pages/dashboard.init.js')}}"></script>
   
    </body>
    
</html>