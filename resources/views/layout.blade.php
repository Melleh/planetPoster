<!DOCTYPE HTML>
<html>

<head>
    <title>Planet Poster</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('/assets/css/strongly.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/tail.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="public/images/cg-favicon.png" sizes="32x32">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
</head>

<body class="homepage is-preload">

    <section id="header">
        <nav >
            <div id="navBar" class="navBar nav-flex-container navbar-header">
                <div class="burger nav-flex-item-4">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <div class="nav-links">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="#">Posters</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </div >
                <div class="nav-login">
                    <a href="/login"><button class="logInButton">Log In</button></a>
                    <a href="/register"><button class="registerButton">Register</button></a>
                </div>
            </div>



        </nav>

        @yield('header')


    </section>


        @yield('content')


    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <header>
                <h2>Questions or comments? <strong>Get in touch:</strong></h2>
            </header>
            <div class="row">
                <div class="col-6 col-12-medium">
                    <section>
                        <form method="post" action="#">
                            <div class="row gtr-50">
                                <div class="col-6 col-12-small">
                                    <input name="name" placeholder="Name" type="text" />
                                </div>
                                <div class="col-6 col-12-small">
                                    <input name="email" placeholder="Email" type="text" />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="form-button-submit button icon solid fa-envelope">Send
                                        Message</a>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="col-6 col-12-medium">
                    <section>
                        <p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet
                            mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur
                            leo nibh, rutrum eu malesuada.</p>
                        <div class="row">
                            <div class="col-6 col-12-small">
                                <ul class="icons">
                                    <li class="icon solid fa-home">
                                        1234 Somewhere Road<br />
                                        Nashville, TN 00000<br />
                                        USA
                                    </li>
                                    <li class="icon solid fa-phone">
                                        (000) 000-0000
                                    </li>
                                    <li class="icon solid fa-envelope">
                                        <a href="#">info@untitled.tld</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-12-small">
                                <ul class="icons">
                                    <li class="icon brands fa-twitter">
                                        <a href="#">@untitled</a>
                                    </li>
                                    <li class="icon brands fa-instagram">
                                        <a href="#">instagram.com/untitled</a>
                                    </li>
                                    <li class="icon brands fa-dribbble">
                                        <a href="#">dribbble.com/untitled</a>
                                    </li>
                                    <li class="icon brands fa-facebook-f">
                                        <a href="#">facebook.com/untitled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div id="copyright" class="container">
            <ul class="links">
                <li>&copy; Untitled. All rights reserved.</li>
            </ul>
        </div>
    </section>

    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
