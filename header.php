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
                    <div class="phone">
                        <i class="fa fa-phone" aria-hidden="true"></i> 
                        Lorem ipsum dolor.
                    </div>

                    <div class="mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        Lorem ipsum dolor.
                    </div>

                    <div class="address">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Lorem ipsum dolor sit amet.
                    </div>
                </div>

                <div class="connect pull-right">
                    <span>Connect with us</span>
                    <div class="sns-services">
                        <a href="" class="sns">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                        <a href="" class="sns">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="" class="sns">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="" class="sns">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="header navbar">
            <div class="container">
                <div class="logo">
                    <a href="#">Craig H.Ricks, D.D.S. P.C.</a>
                </div>

                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item">
                        <a href="">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="">MEET THE TEAM</a>
                    </li>
                    <li class="nav-item">
                        <a href="">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a href="">APPOINTMENT FORMS</a>
                    </li>
                    <li class="nav-item">
                        <a href="">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>