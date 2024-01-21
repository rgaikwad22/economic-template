<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo get_bloginfo('name'); ?> |
        <?php echo get_bloginfo('description'); ?>
    </title>

    <!-- 120 word description for SEO purposes goes here. Note: Usage of lang tag. -->
    <meta name="description" lang="en" content="">

    <!-- Keywords to help with SEO go here. Note: Usage of lang tag.  -->
    <meta name="keywords" lang="en" content="">

    <!-- View-port Basics: http://mzl.la/VYREaP -->
    <!-- This meta tag is used for mobile device to display the page without any zooming,
        so how much the device is able to fit on the screen is what's shown initially. 
        Remove comments from this tag, when you want to apply media queries to the website. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- To adhear no-cache for Chrome -->
    <!-- <meta http-equiv="cache-control" content="no-store, no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-store, no-cache" />
    <meta http-equiv="Expires" content="0" /> -->

    <!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
    <link rel="shortcut icon" href="favicon.ico">

    <!--font-awesome link for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Default style-sheet is for 'media' type screen (color computer display).  -->
    <link rel="stylesheet" media="screen" href="<?php echo get_bloginfo('template_url'); ?>/assets/css/style.css">

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--container starts here-->
    <div class="container">
        <!--header starts here-->
        <header>
            <?php
                $img = get_bloginfo('template_url') . '/assets/images/icon2.png';

                $custome_log_id = get_theme_mod('custome_logo');
                $logo = wp_get_attachment_image_src($custome_log_id, 'full');
                if (has_custom_logo()) {
                    $img = esc_url($logo[0]);
                }
            ?>

            <!--bottom header starts here-->
            <div class="header-bottom">
                <div class="wrapper">
                    <h1 class="logo">
                        <a href="/wordpress" title="Prixima.">Prixima</a>
                    </h1>
                    <div class="header-bottom-nav">
                        <nav class="navbar">
                            <?php
                            wp_nav_menu(array(
                                'menu' => 'primary-menu',
                                'container' => '',
                                'items_wrap' => '<ul class="nav navbar-right header-nav-links">%3$s</ul>',
                            ));
                            ?>
                        </nav>
                        <ul class="hamburger">
                            <li class="bar">bar</li>
                            <li class="bar">bar</li>
                            <li class="bar">bar</li>
                        </ul>
                        <div class="Contact-btn">
                            <a href="#FIXME" title="Contact" class="btn">Contact</a>
                        </div>
                        <button id="my-button">Click Me</button>

                    </div>
                </div>
            </div>
            <!--bottom header ends here-->
        </header>
        <!--header ends here-->