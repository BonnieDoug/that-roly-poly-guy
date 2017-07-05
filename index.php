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
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/materialize.css">
    <!--    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
    <link href="./css/style.css?1" type="text/css" rel="stylesheet" media="screen,projection"/>
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
                <li><a target="_blank" href="https://www.facebook.com/pg/thatrolypolyguy/" class="black-text"><i
                                class="ion-social-facebook small"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/thatrolypolyguy/" class="black-text"><i
                                class="ion-social-instagram small"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/ThatRolyPolyGuy" target="_blank" class="black-text"><i
                                class="ion-social-twitter small"></i></a>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="#home" class="black-text">Home</a></li>
                <li><a href="#about" class="black-text">About</a></li>
                <li><a href="#portfolio" class="black-text">Portfoly</a></li>
                <li><a href="https://www.etsy.com/uk/shop/thatrolypolyguy" target="_blank" class="black-text">Shop</a>
                </li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse black-text
"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>
<ul id="nav-mobile" class="side-nav">
    <li><a href="#home" class="black-text">Home</a></li>
    <li><a href="#about" class="black-text">About</a></li>
    <li><a href="#portfolio" class="black-text">Portfoly</a></li>
    <li><a href="https://www.etsy.com/uk/shop/thatrolypolyguy" target="_blank" class="black-text">Shop</a>
</ul>
<a id="home" class="anchor"></a>
<div id="index-banner" class="parallax-container" style="min-height: 85vh;">
    <div class="parallax"><img src="./images/background-1.jpg?1" alt="Unsplashed background img 1"></div>
</div>
<a id="about" class="anchor"></a>
<div class="container">
    <div class="section">
        <!--   Icon Section   -->
        <div class="row flow-text">
            <h2 class="center">Welcome</h2>
            <p>I go by the name of <strong>thatrolypolyguy</strong> and I am an Illustrator / Artist from the seven hills of Sheffield,
                United Kingdom. For some time, I have been working towards a return to my passion for art. I have been
                re-developing my style and have already been given plenty of positive feedback regarding my creations, 
                which are said to be unique, fun and eye catching.</p>
            <p>My passion started very early as most hobbies do, drawing my favourite cartoons, action figures and 
                characters from the cereal packaging. I used to love taking part in art at my primary school as this 
                was the only time I would concentrate, let loose and block out everything that wasn’t important. I’m 
                still that little kid today constantly living in a fantasy world.</p>
            <p>I dedicate my time on a lot of personal projects I set for myself.  This could be re-creating and old
                piece, working on current pieces or drawing new and different objects never attempted before by myself.
                By doing this it as pointed me in the direction of creating unique pieces for local businesses within
                my area that have allowed me to showcase my artwork. I have also gone down the fan art route as this 
                is popular for artist to take part in. I love doing far art requests as this allows me to put my own 
                twist on things.</p>
            <p>Please take time to have a look at my Portfoly, the pieces displayed are now available as prints in
                the Shop. You can also check my work out on Instagram at 
                <a target="_blank" href="https://www.instagram.com/thatrolypolyguy/" class="black-text"><strong>thatrolypolyguy</strong></a>, or follow me 
                <a target="_blank" href="https://twitter.com/ThatRolyPolyGuy" target="_blank" class="black-text"><strong>#trpg</strong></a>.</p>
            <p><a target="_blank" href="https://www.facebook.com/pg/thatrolypolyguy/" class="black-text"><strong>@thatrolypoluguy</strong></a></p>
        </div>

    </div>
</div>
<div id="index-banner" class="parallax-container valign-wrapper" style="min-height: 85vh;">
        <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h3 class="header col s12 light transparency">#trpg</h3>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="./images/background-2.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="container">
    <div class="section">
        <a id="portfolio" class="anchor"></a>

        <h1 class="center">Portfoly</h1>
        <div class="carousel">
            <a class="carousel-item" href="#modal1"><img src="./images/carosel1.jpg"></a>
            <a class="carousel-item" href="#modal2"><img src="./images/carosel2.jpg"></a>
            <a class="carousel-item" href="#modal3"><img src="./images/carosel3.jpg"></a>
            <a class="carousel-item" href="#modal4"><img src="./images/carosel4.jpg"></a>
            <a class="carousel-item" href="#modal5"><img src="./images/carosel5.jpg"></a>
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
    <div class="parallax"><img src="./images/background-3.jpg" alt="Unsplashed background img 3"></div>
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
                    <li><a target="_blank" href="https://www.facebook.com/pg/thatrolypolyguy/" class="black-text"><i
                                    class="ion-social-facebook tiny"></i> @thatrolypolyguy</a></li>
                    <li><a target="_blank" href="https://www.instagram.com/thatrolypolyguy/" class="black-text"><i
                                    class="ion-social-instagram tiny"></i> thatrolypolyguy</a></li>
                    <li><a target="_blank" href="https://twitter.com/ThatRolyPolyGuy" target="_blank" class="black-text"><i
                                    class="ion-social-twitter tiny"></i> #trpg</a>
                    </li>
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

<div id="modal1" class="modal" style="width:320px;">
    <div class="modal-content">
        <img class="modal-image" src="./images/carosel1.jpg">
    </div>
</div>
<div id="modal2" class="modal" style="width:320px;">
    <div class="modal-content">
        <img class="modal-image" src="./images/carosel2.jpg">
    </div>
</div>
<div id="modal3" class="modal" style="width:320px;">
    <div class="modal-content">
        <img class="modal-image" src="./images/carosel3.jpg">
    </div>
</div>
<div id="modal4" class="modal" style="width:320px;">
    <div class="modal-content">
        <img class="modal-image" src="./images/carosel4.jpg">
    </div>
</div>
<div id="modal5" class="modal" style="width:320px;">
    <div class="modal-content">
        <img class="modal-image" src="./images/carosel5.jpg">
    </div>
</div>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="js/init.js?1"></script>
<!--<script src="js/smooth-scroll.min.js"></script>-->

</body>
</html>
