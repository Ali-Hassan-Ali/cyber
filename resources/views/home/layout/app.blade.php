<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>@lang('home.welcome')</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('home_files/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('home_files/css/style.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('home_files/images/fevicon.png') }}" type="image/gif" />
      <link rel="stylesheet" type="text/css" href="{{ asset('home_files/assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('home_files/assets/css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ asset('home_files/assets/css/templatemo-softy-pinko.css') }}">

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
        
        @include('home.layout.include._loader')
        <!-- end loader -->
        <!-- header -->
        @include('home.layout.include._hedaer')
        <!-- end header inner -->
        <!-- end header -->
        
        <!-- start content -->
        
        @yield('content')

        <!-- end content -->

        <!-- ***** Footer Start ***** -->
        @include('home.layout.include._footer')
        <!-- ***** Footer end ***** -->

      <!-- Javascript files-->
      <script src="{{ asset('home_files/js/jquery.min.js') }}"></script>
      <script src="{{ asset('home_files/js/popper.min.js') }}"></script>
      <script src="{{ asset('home_files/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('home_files/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('home_files/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('home_files/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('home_files/js/custom.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

