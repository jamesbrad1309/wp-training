<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php wp_title( '-', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">

        <div class="topsection">
            <div class="container">
                <div class="infos">
                    <div class="phone"><span class="glyphicon glyphicon-earphone"></span>Lorem ipsum dolor.</div>
                    <div class="mail"><span class="glyphicon glyphicon-envelope"></span>Lorem ipsum dolor.</div>
                    <div class="address"><span class="glyphicon glyphicon-map-marker"></span>Lorem ipsum dolor sit amet.</div>
                </div>

                <div class="connect">
                    <span>Connect with us</span>
                    <a href="" class="sns gplus"></a>
                    <a href="" class="sns facebook"></a>
                    <a href="" class="sns twitter"></a>
                    <a href="" class="sns linkedin"></a>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="">Craig H.Ricks, D.D.S. P.C.</a>
                </div>

                <nav>
                    <a href="">HOME</a>
                    <a href="">MEET THE TEAM</a>
                    <a href="">SERVICES</a>
                    <a href="">APPOINTMENT FORMS</a>
                    <a href="">FAQ</a>
                    <a href="">CONTACT US</a>
                    <a href="" class="search"></a>
                </nav>
            </div>
        </div>