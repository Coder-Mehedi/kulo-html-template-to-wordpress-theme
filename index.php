<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Agency Template</title>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>
    <div class="wrapper">
        <?php 
        $top_banner = new WP_Query(['post_type' => 'top_banner']); ?>
         
        <?php if ( $top_banner->have_posts() ) : ?>
        <?php while ( $top_banner->have_posts() ) : $top_banner->the_post(); ?>

        <header class="header" style="background: url(<?php echo the_post_thumbnail_url(); ?>);">
        <?php endwhile ?>
    <?php endif ?>
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
                            <!-- <ul class="nav navbar-nav">
                                <li class="active"><a href="#">About</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-text">
                        <?php 
                        $top_banner = new WP_Query(['post_type' => 'top_banner']); ?>
                         
                        <?php if ( $top_banner->have_posts() ) : ?>
                        <?php
                        $left_btn_text = get_post_meta( $post->ID, 'left_btn_text',true );
                        $left_btn_url = get_post_meta( $post->ID, 'left_btn_url',true );

                        $right_btn_text = get_post_meta( $post->ID, 'right_btn_text',true );
                        $right_btn_url = get_post_meta( $post->ID, 'right_btn_url',true );

                         ?>
                         
                            <!-- the loop -->
                            <?php while ( $top_banner->have_posts() ) : $top_banner->the_post(); ?>
    
                            <h1><?php the_title(); ?></h1>
                            <?php the_content() ?>
                            <a href="<?php echo $left_btn_url; ?>"><button><?php echo $left_btn_text; ?></button></a>

                            <a href="<?php echo $right_btn_url; ?>"><button><?php echo $right_btn_text; ?></button></a>
                                <!-- pagination here -->
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                     
                        <?php wp_reset_postdata(); ?>
                     
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="another-text">
                            <?php 
                        $steps = new WP_Query(['post_type' => 'steps']); ?>
                         
                        <?php if ( $steps->have_posts() ) : ?>
                         
                            <!-- the loop -->
                            <?php while ( $steps->have_posts() ) : $steps->the_post(); ?>            
                            <h3><?php the_title() ?></h3>
                            <?php the_content() ?>

                        <?php endwhile; ?>
                        <!-- end of the loop -->
                     
                        <?php wp_reset_postdata(); ?>
                     
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="development">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri(); ?>/img/development-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri(); ?>/img/development-shepe-white.png" alt="">
            </div>
            <div class="container">
                <?php 
                    $step_items = new WP_Query(['post_type' => 'step_items', 'posts_per_page' => 3]); ?>
                <div class="row">
            <?php if ( $step_items->have_posts()):
                while ($step_items->have_posts()) : $step_items->the_post();
                    $icon = get_post_meta( $post->ID, "icon", true ); ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="design-development one">
                            <i class="material-icons"><?php echo $icon; ?></i>
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                    
                </div>
            </div>
        </section>
        <section class="works">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="work-images">
                            <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HZRp6iRjnhQ" frameborder="0" allowfullscreen></iframe> -->
                            <div class="overlay-text">
                                <i class="material-icons">play_circle_filled</i>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="work-text-full">
                            <div class="work-text">
                                <h2>How It Works?</h2>
                                <p>Its Simple. Check the video to understand How it works. Lorem Ipsum Dolor Sit Amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolia">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="port-text">
                            <h2>What We Did Recently!</h2>
                            <p>ILorem ipsum dolor sit amet, consectetur adipisicing elit, sed <br> do eiusmod </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $we_did = new WP_Query(['post_type' => 'we_did', 'posts_per_page' => 6]); ?>
                    <?php if ( $we_did->have_posts() ) : ?>
                    <?php while ( $we_did->have_posts() ) : $we_did->the_post(); ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="portfolio-part">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <div class="overlay-slide">
                                <h2><?php the_title() ?></h2>
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            <?php endif ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="penination">
                            <a href="#"><p>More Works</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="team-text">
                            <h2>Our Team!</h2>
                            <p>Meet Our Awesome Team. Lorem Ipsum dolor sit amet <br> Hola amigos como estas!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-claint owl-carousel owl-theme">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/team-member1.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3>Kabbo Liate</h3>
                                    <h4>UX/UI Designer</h4>
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/team-member2.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3>Kabbo Liate</h3>
                                    <h4>UX/UI Designer</h4>
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/team-member3.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3>Kabbo Liate</h3>
                                    <h4>UX/UI Designer</h4>
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/team-member1.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3>Kabbo Liate</h3>
                                    <h4>UX/UI Designer</h4>
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/team-member2.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3>Kabbo Liate</h3>
                                    <h4>UX/UI Designer</h4>
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/team-member3.png" alt="">
                                <div class="item-overlay"></div>
                                <div class="item-text">
                                    <h3>Kabbo Liate</h3>
                                    <h4>UX/UI Designer</h4>
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="blue">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact-shepe-white.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-text">
                            <h2>Contact US!</h2>
                            <p>Meet Our Awesome Team. Lorem Ipsum dolor sit amet Hola amigos como estas!</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="contact-form">
                            <form action="#" method="post">
                                <div class="first">
                                    <input type="text" name="" placeholder="First Name">
                                </div>
                                <div class="last">
                                    <input type="text" name="" placeholder="Last Name">
                                </div>
                                <div class="email">
                                    <input type="email" name="" placeholder="Email Address">
                                </div>
                                <div class="message">
                                    <textarea placeholder="Your Message"></textarea>
                                </div>
                                <div class="checkbox-submit">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="" checked> Allow Newsletter</label>
                                    </div>
                                    <div class="submit">
                                        <input type="submit" value="SEND">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-icon">
                            <h2>Kulo</h2>
                            <p><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a><a href="#"><i aria-hidden="true" class="fa fa-dribbble"></i></a><a href="#"><i aria-hidden="true" class="fa fa-behance"></i></a><a href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a></p>
                            <h5>&copy; All Right Reserved. dart theme 2017</h5>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="footer-text">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>About Us</h3>
                                        <p><a href="#">Our Team</a></p>
                                        <p><a href="#">Company</a></p>
                                        <p><a href="#">Jobs</a></p>
                                        <p><a href="#">Newsletter</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Help Center</h3>
                                        <p><a href="#">Documentations</a></p>
                                        <p><a href="#">Tutorials</a></p>
                                        <p><a href="#">Term Of Use</a></p>
                                        <p><a href="#">Privecy Policy</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Tools</h3>
                                        <p><a href="#">Create Account</a></p>
                                        <p><a href="#">Log In</a></p>
                                        <p><a href="#">Services</a></p>
                                        <p><a href="#">Sitemap</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Get In Touch</h3>
                                        <p><a href="#">Contact Us</a></p>
                                        <p><a href="#">Request A Demo</a></p>
                                        <p><a href="#">+12 323 323 323</a></p>
                                        <p><a href="#">support@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer() ?>
</body>

</html>