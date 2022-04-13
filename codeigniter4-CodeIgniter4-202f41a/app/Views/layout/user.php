<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.1" rel="stylesheet" />
 
   
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
   <!-- <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">-->
</head>
<body>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

      @include("layouts.inc.sidebar")
      </aside>
     
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include("layouts.inc.adminnav")
        <div class="container-fluid py-4">
          @yield('content')
         
         
        
        </main>









    <!-- Scripts -->
   
    <script src="{{ asset('admin/js/popper.min.js') }}" ></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" ></script>
     <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" ></script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  @yield('scripts')
</body>
</html>
