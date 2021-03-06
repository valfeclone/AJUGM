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

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- <link rel="icon" href="{{ asset('/images/ajisaka-logo.png') }}"> -->
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    @yield('extra-script')
    <script src="{{ asset('js/frontend.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
</head>
<body>
    <div class="app">
        <nav class="header z-max">
            <a href="/" class="logo-box">
                <img src="/images/ajisaka-logo.png" alt="" class="logo">
            </a>
            <div class="header__link-box">
                <a href="/about" class="link-item"><p class="text-bold text-white text-uppercase">About</p></a>
                <div class="dropdown">
                    <button class="dropdown-button--hover"><p class="text-bold text-white text-uppercase">Kompetisi</p></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-section">
                            <a href="/kompetisi/arjuna" class="dropdown-option">Arjuna</a>
                            <a href="/kompetisi/kresna" class="dropdown-option">Kresna</a>
                            <a href="/kompetisi/nakula" class="dropdown-option">Nakula</a>
                            <a href="/kompetisi/prahasta" class="dropdown-option">Prahasta</a>
                            <a href="/kompetisi/sadewa" class="dropdown-option">Sadewa</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-button--hover"><p class="text-bold text-white text-uppercase">Events</p></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-section">
                            <a href="/creativemarket" class="dropdown-option">Creative Market</a>
                            <!-- <a href="/webinar" class="dropdown-option">Webinar</a> -->
                            <a href="/exhibition" class="dropdown-option">3D Exhibition</a>
                        </div>
                    </div>
                </div>
                <a href="/contact" class="link-item"><p class="text-bold text-white text-uppercase">FAQ & Contact</p></a>
            </div>
            <div class="header__util">
                @guest
                <a href="/login" class="link-item"><p class="text-bold text-white text-uppercase">Login</p></a>
                @else
                <div class="dropdown">
                    <button class="dropdown-button"><p class="text-bold text-white text-uppercase">{{auth()->User()->name}}</p></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-section">
                            <a href="/tim/update" class="dropdown-option">Account</a>
                            <a href="/tim/member" class="dropdown-option">Team Members</a>
                        </div>
                        <div class="dropdown-section">
                            <a href="/tim/uploadbukti" class="dropdown-option">Bukti Pembayaran</a>
                            <a href="/tim/uploadkarya" class="dropdown-option">Upload Karya</a>
                        </div>
                        <div class="dropdown-section">
                            <form action="/logout" method="POST">
                                @csrf
                                <input type="submit" class="dropdown-option" value="Log out">
                            </form>          
                        </div>
                    </div>
                </div>
                @endguest
            </div>

            <div class="header__link-box--responsive">
                <a href="/about" class="link-item"><p class="text-bold text-black text-uppercase">About</p></a>
                <a href="/contact" class="link-item"><p class="text-bold text-black text-uppercase">FAQ & Contact</p></a>
                <div class="link-item nested-menu">
                    <p class="text-bold text-black text-uppercase">Kompetisi <i class="fas fa-angle-down nested-menu__arrow"></i></p>
                    <div class="menu">
                        <a href="/kompetisi/arjuna" class="link-item"><p class="text-bold text-black text-uppercase">Arjuna</p></a>
                        <a href="/kompetisi/kresna" class="link-item"><p class="text-bold text-black text-uppercase">Kresna</p></a>
                        <a href="/kompetisi/nakula" class="link-item"><p class="text-bold text-black text-uppercase">Nakula</p></a>
                        <a href="/kompetisi/prahasta" class="link-item"><p class="text-bold text-black text-uppercase">Prahasta</p></a>
                        <a href="/kompetisi/sadewa" class="link-item"><p class="text-bold text-black text-uppercase">Sadewa</p></a>
                    </div>
                </div>
                <div class="link-item nested-menu">
                    <p class="text-bold text-black text-uppercase">Events <i class="fas fa-angle-down nested-menu__arrow"></i></p>
                    <div class="menu">
                        <a href="/creativemarket" class="link-item"><p class="text-bold text-black text-uppercase">Creative Market</p></a>
                        <a href="/webinar" class="link-item"><p class="text-bold text-black text-uppercase">Webinar</p></a>
                        <a href="/exhibition" class="link-item"><p class="text-bold text-black text-uppercase">3D Exhibition</p></a>
                    </div>
                </div>
                <div class="hr"></div>
                @guest
                <a href="/login" class="link-item"><p class="text-bold text-black text-uppercase">Login</p></a>
                @else
                <a href="/tim/update" class="link-item"><p class="text-bold text-black text-uppercase">{{auth()->User()->name}}'s Dashboard</p></a>
                <form action="/logout" method="POST">
                    @csrf
                    <input type="submit" class="link-item text-bold text-black text-uppercase no-border" value="Log out">
                </form> 
                @endguest

                <i class="fas fa-times-circle close-button"></i>
            </div>
            <a href="javascript:void(0);" class="icon header__hamburger-button">
                <i class="fa fa-bars header__hamburger"></i>
            </a>
        </nav>
        @yield('content')

        <footer class="footer z-max">
            <a href="/" class="logo-box">
                <img src="/images/ajisaka-logo.png" alt="" class="logo">
            </a>
            <div class="footer__link-box">
                <a href="/about" class="link-item"><p class="text-bold text-grey text-uppercase">About</p></a>
                <a href="/#landing-matlom" class="link-item"><p class="text-bold text-grey text-uppercase">Kompetisi</p></a>
                <a href="/#" class="link-item"><p class="text-bold text-grey text-uppercase">Events</p></a>
                <a href="/contact" class="link-item"><p class="text-bold text-grey text-uppercase">FAQ & Contact</p></a>
            </div>
            <div class="footer__util">
                <p class="text-regular text-grey">&#169;2020-Form | All Rights Reserved</p>
            </div>
        </footer>
    </div>
</body>
</html>