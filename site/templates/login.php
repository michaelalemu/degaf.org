<?php

if($user->isLoggedin()) {
    // user is already logged in, so they don't need to be here
    $session->redirect("/userloggedin"); 
}

// check for login before outputting markup
if($input->post->user && $input->post->pass) {

    $user = $sanitizer->username($input->post->user);
    $pass = $input->post->pass; 

    if($session->login($user, $pass)) {
        // login successful
        $session->redirect("/?loginsuccessful"); 
    }
}

?>

<html>
    <head>
        <title>Kollegium | Gymnasium Tiergarten</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="http://schule.moabit.de/css/ie/html5shiv.js"></script><![endif]-->
        <script src="http://schule.moabit.de/js/jquery.min.js"></script>
        <script src="http://schule.moabit.de/js/jquery.dropotron.min.js"></script>
        <script src="http://schule.moabit.de/js/jquery.scrollgress.min.js"></script>
        <script src="http://schule.moabit.de/js/skel.min.js"></script>
        <script src="http://schule.moabit.de/js/skel-layers.min.js"></script>
        <script src="http://schule.moabit.de/js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="http://schule.moabit.de/css/skel.css" />
            <link rel="stylesheet" href="http://schule.moabit.de/css/style.css" />
            <link rel="stylesheet" href="http://schule.moabit.de/css/style-wide.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    </head>
    <body>

        <!-- Header -->
        <header id="header" class="skel-layers-fixed">
            <h1><a href="index.html">Gymnasium Tiergarten</a> in Berlin-Mitte</h1>
            <nav id="nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="" class="icon fa-angle-down">Schule</a>
                        <ul>
                            <li><a href="generic.html">Schulleitung</a></li>
                            <li><a href="contact.html">Profile & Fachrichtungen</a></li>
                            <li><a href="elements.html">Aufnahmekriterien</a></li>
                            <li><a href="kollegium.html">Kollegium</a></li>
                            <li><a href="contact.html">Kontakt</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="icon fa-angle-down">Schulalltag</a>
                        <ul>
                            <li><a href="generic.html">SV</a></li>
                            <li><a href="contact.html">Termine & Pläne</a></li>
                            <li><a href="elements.html">Projekte & AGs</a></li>
                            <li><a href="elements.html">Exkursionen & Berichte</a></li>
                            <li><a href="contact.html">Schülerzeitung</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="icon fa-angle-down">Eltern</a>
                        <ul>
                            <li><a href="generic.html">GEV</a></li>
                            <li><a href="contact.html">Förderverein</a></li>
                            <li><a href="elements.html">Formulare</a></li>
                            <li><a href="elements.html">Berichte</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="button">Anmelden</a></li>
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner" style="background-image: url('images/GymnasiumInTiergarten_Spreeblick1.jpg');"></section>

        <!-- Main -->
        <section id="main" class="container">
            <div class="box">
                <form action="./" method='post'>
                    <?php if($input->post->user) echo "<h2 class='error'>Login failed</h2>"; ?>
                    <label>Nutzername <input type='text' name='user' /></label>
                    <label>Passwort <input type='password' name='pass' /></label>
                    <input type='submit' name='submit' value='Anmelden' />
                </form>
            </div>
        </section>
        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; 2015 Gymnasium Tiergarten. Alle Rechte vorbehalten.</li><li>Web: Michael Alemu</li>
            </ul>
        </footer>
    </body>
</html>