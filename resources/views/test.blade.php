<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link rel="stylesheet" href="{{ asset('assets/css/strongly.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com"> <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">     <link rel="icon" href="public/images/cg-favicon.png" sizes="32x32">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">


    <title>Document</title>
</head>
<body>
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

        <div class="container">

            <!-- Logo -->
                <h1 id="logo"><a href="index.html">Strongly Typed</a></h1>
                <p>A responsive HTML5 site template. Manufactured by HTML5 UP.</p>

        </div>
    </section>

</body>
</html>
