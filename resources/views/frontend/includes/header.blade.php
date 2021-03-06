<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="tarikmanoar">
        <meta name="author" content="tarikmanoar">
        <meta name="keywords" content="tarikmanoar, emarts, eCommerce">
        <meta name="robots" content="all">
        <link rel="shortcut icon" href="{{asset('/frontend/assets/images/favicon.png')}}" type="image/x-icon">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') | {{ config('app.name', 'Emart') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Bootstrap Core CSS -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">

        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/blue.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/rateit.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-select.min.css')}}">




        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.css')}}">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
            rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        @stack('css')

    </head>
