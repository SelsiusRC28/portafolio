<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Meta-->
    <link rel="icon" href="{{secure_asset('images/1Home/logo.png')}}" type="image/x-icon">

    <!-- Fonts -->
    <!-- Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- Mali -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    {{-- SEO --}}
    <meta name="description" content="Hola bienvenid@ a mi Portafolio, soy Erick, Desarrollador Web">
    <link rel="favicon" href="{{secure_asset('images/1Home/logo.png')}}">
    <link rel="apple-touch-icon"
        href="{{secure_asset('images/1Home/logo.png')}}">
    <meta name="theme-color" content="#192734">
    <meta name="twitter:card" content="summary">
    <meta property="og:type" content="website">
    <meta property="og:title" name="twitter:title" content="Portafolio - Erick">
    <meta property="og:description" name="twitter:description"
        content="Hola bienvenid@ a mi Portafolio, soy Erick, Desarrollador Web">
    <meta property="og:image" name="twitter:image"
        content="{{secure_asset('images/1Home/header.png')}}">
    <meta property="og:url" name="twitter:url"
        content="https://erickdeveloper.herokuapp.com/">
    
        <link rel="canonical" href="https://erickdeveloper.herokuapp.com/">

    @livewireStyles
</head>
<body>
    <x-navbar></x-navbar>

        <main >
            @yield('content')
        </main>

    <x-footer></x-footer>
    @livewireScripts

</body>
</html>

