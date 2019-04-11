<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="/home" style="color: rgba(0,0,0,0.7);">Act!ion
            AID</a>
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto"></ul>
        </div>
    </div>
</nav>
<header class="masthead text-center text-white d-flex" style="background-image:url('/img/coin-slot.jpg');">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 col-xl-6 mx-auto">
                <h1 style="color: rgb(0,0,0);">We Spread Happiness <i class="fa fa-heart" style="color: rgb(255,0,0);"></i> </h1>
                <h4 style="color: rgb(0,0,0);">Donate to Action Aid for them to be able to help those in need cheer!!</h4>
                <a class="btn btn-primary"  href="/donate" style="margin-bottom: 9px;">Donate</a>
            </div>
            <div class="col-xl-5">
                @yield('welcome')
            </div>
        </div>
    </div>
</header>
</body>
</html>
