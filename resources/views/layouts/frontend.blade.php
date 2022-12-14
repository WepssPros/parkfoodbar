<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOCAL INA</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('local.ina/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('/local.ina/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
      type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('/local.ina/css/agency.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    @include('component.frontend.navbar')

    <!-- Header -->
    @include('component.frontend.header')

    {{-- Content User  --}}
    @yield('content-user')
    {{-- Content user  --}}



    <!-- Footer -->
    @include('component.frontend.footer')

   
  


    <!-- Bootstrap core JavaScript -->
    <script src="{{('/local.ina/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{('local.ina/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{('local.ina/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{('local.ina/vendor/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{('local.ina/vendor/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{('local.ina/js/agency.min.js')}}"></script>

  </body>

</html>
