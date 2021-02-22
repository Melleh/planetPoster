<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Strongly Typed by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/strongly.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <link rel="preconnect" href="https://fonts.gstatic.com"> <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">     <link rel="icon" href="public/images/cg-favicon.png" sizes="32x32">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">


</head>

<body class="homepage is-preload">
    <div id="page-wrapper">
        <section id="header">

            <nav id="navBar" class="navBar nav-flex-container navbar-header">
                <div class="nav-flex-item-1">
                    <a class=" nav-logo" href="/">
                        <img src="public/images/giraffe.png" alt="">
                        PlanetPoster</a>
                </div>
                <div class="nav-flex-item-2">
                    <ul class="nav-links">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/leaderboard">Posters</a>
                        </li>
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-flex-item-3">
                    <div class="nav-login">
                        <a href="/login"><button class="logInButton">Log In</button></a>
                        <a href="/register"><button class="registerButton">Register</button></a>
                    </div>
                </div>

                <div class="burger nav-flex-item-4">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>



                @yield('header')


                {{-- <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a class="icon solid fa-home" href="/"><span>Home</span></a></li>
                        <li>
                            <a href="#" class="icon fa-chart-bar"><span>Collections</span></a>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li><a href="#">Etiam dolore nisl</a></li>
                                <li>
                                    <a href="#">Phasellus consequat</a>
                                    <ul>
                                        <li><a href="#">Magna phasellus</a></li>
                                        <li><a href="#">Etiam dolore nisl</a></li>
                                        <li><a href="#">Phasellus consequat</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Veroeros feugiat</a></li>
                            </ul>
                        </li>

                        <li><a class="icon solid fa-cog" href="/"><span>Product Feature</span></a></li>
                        <li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a>
                        </li>
                        <li><a class="icon solid fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
                    </ul>
                </nav> --}}

        </section>


        @yield('content')

    </div>

    <script src="{{ asset('js/navbar.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
