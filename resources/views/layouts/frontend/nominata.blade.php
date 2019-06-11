<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Nominata 2019') }}</title>

    <!-- Font Awesome Icons -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'> --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Plugin CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
    <link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    @yield('styles')

</head>

<body id="page-top">

    <div id="app">
        @yield('content')
    </div>


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('assets/js/filters.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>

  @yield('scripts')

</body>
</html>
