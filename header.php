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
                        <?php 
                            $phone = do_shortcode('[acf field="practice_phone" post_id="option"]');
                            if($phone!=''){
                                echo $phone;
                            }
                         ?>
                    </div>

                    <div class="mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <?php 
                            // $email = get_field('practice_email', 'option');
                            $email = do_shortcode('[acf field="practice_email" post_id="option"]');
                            if($email!=''){
                                echo $email;
                            }
                        ?>
                    </div>

                    <div class="address">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php 
                            $address = do_shortcode('[acf field="practice_address" post_id="option"]');
                            if($address!=''){
                                echo $address;
                            }
                         ?>
                    </div>
                </div>

                <div class="connect pull-right">
                    <span>Connect with us</span>
                    <div class="sns-services">

                        <?php 
                            $gplus_link = do_shortcode('[acf field="social_google_plus" post_id="option"]');
                            $fb_link = do_shortcode('[acf field="social_facebook" post_id="option"]');
                            $twitter_link = do_shortcode('[acf field="social_twitter" post_id="option"]');
                            $linkedin_link = do_shortcode('[acf field="social_linkedin" post_id="option"]');
                         ?>

                        <?php if($gplus_link!=''): ?>
                        <a href="<?php echo $gplus_link; ?>" class="sns">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                        <?php endif; ?>

                        <?php if($fb_link!=''): ?>
                        <a href="<?php echo $fb_link; ?>" class="sns">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <?php endif; ?>
                        
                        <?php if($twitter_link!=''): ?>
                        <a href="<?php echo $twitter_link; ?>" class="sns">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <?php endif; ?>
                        
                        <?php if($linkedin_link!=''): ?>
                        <a href="<?php echo $linkedin_link; ?>" class="sns">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <nav class="header navbar">
            <div class="container">

                <?php 
                    $logo_link = do_shortcode('[acf field="practice_logo" post_id="option"]');

                    if($logo_link!=''):
                 ?>
                    <div class="logo">
                        <img src="<?php echo $logo_link; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </div>
                <?php else: ?>
                    <div class="logo">
                        <a href="<?php echo get_bloginfo('siteurl'); ?>"><?php echo get_bloginfo('name'); ?></a>
                    </div>
                <?php endif; ?>

                <?php 
                    wp_nav_menu( array(
                        'menu' => 'Main Menu',
                        'container'=> false,
                        'fallback_cb' => false,
                        'menu_class' => 'nav navbar-nav pull-right',
                    ) );
                 ?>
            </div>
        </nav>