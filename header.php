<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esoft Kulo</title>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>
    <div class="wrapper">

        <header class="header" style="background: url(<?php echo $background_url; ?>);">

            <div class="blue">
                <img src="<?php echo get_template_directory_uri(); ?>/img/header-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri(); ?>/img/header-shepe-white.png" alt="">
            </div>
            <div class="container">
                <img class="shepe1" src="<?php echo get_template_directory_uri(); ?>/img/shepe1.png" alt="">
                <img class="shepe2" src="<?php echo get_template_directory_uri(); ?>/img/shepe2.png" alt="">
                <img class="shepe3" src="<?php echo get_template_directory_uri(); ?>/img/shepe2.png" alt="">
                <img class="shepe4" src="<?php echo get_template_directory_uri(); ?>/img/shepe2.png" alt="">
                <img class="shepe5" src="<?php echo get_template_directory_uri(); ?>/img/shepe1.png" alt="">
                <img class="shepe6" src="<?php echo get_template_directory_uri(); ?>/img/shepe2.png" alt="">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                         
                        <div class="logo">
                            <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ): ?>
                            <img src="<?php echo $logo[0] ?>">
                             <?php else: ?>
                                <a href="#" class="site-name"><h3><?php echo get_bloginfo( 'name' ) ?></h3></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <?php wp_nav_menu( array(
                            'theme_location'  => 'header_menu',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'menu',
                            'container_id'    => '',
                            'menu_class'      => 'nav navbar-nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 3,
                            'walker'          => '',
                        ) ); ?>
                        </div>
                    </div>
                </div>