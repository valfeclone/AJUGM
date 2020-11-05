<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('meta-title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="/js/frontend.js"></script>
</head>
<body>
    <div class="app">
        <nav class="header">
            <a href="/" class="logo-box">
                <img src="/images/ajisaka-logo.png" alt="" class="logo">
            </a>
            <div class="header__link-box">
                <a href="" class="link-item"><p class="text-bold text-white text-uppercase">About</p></a>
                <a href="" class="link-item"><p class="text-bold text-white text-uppercase">Matlom</p></a>
                <a href="" class="link-item"><p class="text-bold text-white text-uppercase">Events</p></a>
                <a href="" class="link-item"><p class="text-bold text-white text-uppercase">Contact</p></a>
            </div>
            <div class="header__util">
                <a href="/login" class="link-item"><p class="text-bold text-white text-uppercase">Login</p></a>
            </div>
        </nav>

        @yield('content')

        <footer class="footer">
            <div class="logo-box">
                <img src="/images/ajisaka-logo.png" alt="" class="logo">
            </div>
            <div class="header__link-box">
                <a href="" class="link-item"><p class="text-regular text-grey text-uppercase">About</p></a>
                <a href="" class="link-item"><p class="text-regular text-grey text-uppercase">Matlom</p></a>
                <a href="" class="link-item"><p class="text-regular text-grey text-uppercase">Events</p></a>
                <a href="" class="link-item"><p class="text-regular text-grey text-uppercase">Contact</p></a>
            </div>
            <div class="header__util">
                <p class="text-regular text-grey">&#169;2020-Form | All Rights Reserved</p>
            </div>
        </footer>
    </div>
</body>
</html>