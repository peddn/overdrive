<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package overdrive
 */
?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title('|', true, 'right'); ?></title>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <?php wp_head(); ?>

    </head>

    <body>

        <div class="container">

            <img src="<?php bloginfo('template_url'); ?>/img/header.png" alt="Overdrive header" class="img-responsive center"/>

            <nav class="navbar navbar-inverse navbar-default override-navbar" role="navigation">

                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo_small.png" alt="Overdrive logo" class="brand-image" />
                        </a>
                    </div>

                    <div class="navbar-collapse collapse">

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav'
                        ));
                        ?>

                        <ul class="nav navbar-nav">

                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_url'); ?>/img/logo-fb_small.png" alt="facebook logo" class="navbar-image" />
                                </a>
                            </li>
                        </ul>

                        <?php get_search_form(); ?> 

                    </div>

                </div>

            </nav>

        </div>


        <div id="page" class="container">

            <a class="hide" href="#content"><?php _e('Skip to content', 'overdrive'); ?></a>

            <div id="content" class="mar-top-30">
