<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Геострой Буммаш - @yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')">
    <link rel="icon" href="{{asset('assets/app/img/favicon.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/app/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/app/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/app/vendor/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/app/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/app/css/adaptive.css')}}">
</head>
<body>

<!-- Header -->
@include('layouts.components.header')

{{-- Content --}}
<main class="@yield('main-tag-class')" >
    @yield('content')
</main>

<!-- Footer -->
@include('layouts.components.footer')

@yield('popups')

<script src="{{asset('assets/app/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/app/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/app/js/owl.carousel.min.js')}}"></script>
@yield('additional-scripts')
<script src="{{asset('assets/app/js/main.js')}}"></script>
</body>
</html>
