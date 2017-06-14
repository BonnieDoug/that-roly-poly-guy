<?php
use Application\EmailController;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

if (isset($_POST['send_email'])) {
    (new EmailController())->processForm();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>That Roly Poly Guy</title>
    <!-- CSS  -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/materialize.css">
    <!--    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
    <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style>
        /* fallback */
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://fonts.gstatic.com/s/materialicons/v22/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        .anchor {
            display: block;
            position: relative;
            top: -80px;
            visibility: hidden;
        }
    </style>
</head>
<body>
<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">
            </a>
            <ul class="left hide-on-med-and-down">
                <li><a href="https://www.facebook.com/pg/thatrolypolyguy/" class="black-text"><i class="ion-social-facebook medium"></i></a></li>
                <li><a href="https://www.instagram.com/thatrolypolyguy/" class="black-text"><i class="ion-social-instagram medium"></i></a></li>
                <li><a href="https://twitter.com/ThatRolyPolyGuy" target="_blank" class="black-text"><i
                                class="ion-social-twitter medium"></i></a>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="#home" class="black-text">Home</a></li>
                <li><a href="#about" class="black-text">About</a></li>
                <li><a href="#portfolio" class="black-text">Portfoly</a></li>
                <li><a href="https://www.etsy.com/uk/shop/thatrolypolyguy" target="_blank" class="black-text">Shop</a>
                </li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse white-text
"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>
<ul id="nav-mobile" class="side-nav">
    <li><a href="#home" class="black-text">Home</a></li>
    <li><a href="#about-us" class="black-text">About</a></li>
    <li><a href="#portfolio" class="black-text">Portpoly</a></li>
    <li><a href="https://www.etsy.com/uk/shop/thatrolypolyguy" target="_blank" class="black-text">Shop</a>
</ul>
<a id="home" class="anchor"></a>
<div id="index-banner" class="parallax-container" style="min-height: 85vh;">
    <div class="parallax"><img src="./images/background1.jpg" alt="Unsplashed background img 1"></div>
</div>
<a id="about" class="anchor"></a>
<div class="container">
    <div class="section">
        <!--   Icon Section   -->
        <div class="row">
            <h2 class="center">About Roly Poly</h2>

        </div>

    </div>
</div>


<div class="container">
    <div class="section">
        <a id="portfolio" class="anchor"></a>

        <h1 class="center">Portfoly</h1>
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="./images/carosel1.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="./images/carosel2.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="./images/carosel3.jpg"></a>
            <a class="carousel-item" href="#four!"><img src="./images/carosel4.jpg"></a>
            <a class="carousel-item" href="#five!"><img src="./images/carosel5.jpg"></a>
        </div>
        <br><br>

    </div>
</div>
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h3 class="header col s12 light transparency">@thatrolypolyguy</h3>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="./images/background3.jpg" alt="Unsplashed background img 3"></div>
</div>
<footer class="page-footer grey">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">That Roly Poly Guy</h5>
                <p class="grey-text text-lighten-4"></p>
            </div>
            <!--            <div class="col l3 s12">-->
            <!--                <h5 class="white-text">Settings</h5>-->
            <!--                <ul>-->
            <!--                    <li><a class="white-text" href="#!">Link 1</a></li>-->
            <!--                    <li><a class="white-text" href="#!">Link 2</a></li>-->
            <!--                    <li><a class="white-text" href="#!">Link 3</a></li>-->
            <!--                    <li><a class="white-text" href="#!">Link 4</a></li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="">@thatrolypolyguy</a></li>
                    <li><a class="white-text" href="#">#TRPG</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-3">
        <div class="container">
            Made by <a class="grey-text">TD-Design</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script src="js/smooth-scroll.min.js"></script>

</body>
</html>