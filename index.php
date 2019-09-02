<?php require_once 'header.php' ?>
        <div class="row">
            <div class="col-md-12">
                <div class="header-text">    
                    <h1><?php echo $main_title; ?></h1>
                    <p><?php echo $main_content ?></p>
                    <a href="<?php $left_btn_url; ?>"><button><?php echo $left_btn_text; ?></button></a>
                    <a href="<?php echo $right_btn_url; ?>"><button><?php echo $right_btn_text; ?></button></a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="another-text">
                          
                    <h3><?php echo $steps_title ?></h3>
                    <p><?php echo $steps_content ?></p>

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
            $icon = get_post_meta( $post->ID, "icon", true );
            $background_color = get_post_meta( $post->ID, "background_color", true ); ?>
            <div class="col-md-4 col-sm-4">
                <div class="design-development one">
                    <i class="material-icons" style="background: <?php echo $background_color; ?>"><?php echo $icon; ?>
                    <span class="before" style="border: 1px solid <?php echo $background_color ?>">
                    </span>
                    <span class="after" style="border: 1px solid <?php echo $background_color; ?>"></span></i>
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
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
                    <div class="overlay-text">
                        <i class="material-icons">play_circle_filled</i>
                    </div>


                </div>
            </div>
            <div class="col-md-5">
                <div class="work-text-full">
                    <div class="work-text">
            
            
            <h2><?php echo $hit_title; ?></h2>
            <p><?php echo $hit_content; ?></p>

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
                    <?php 
            $team_members = new WP_Query(['post_type' => 'team_members', 'posts_per_page' => 3]); ?>
            <?php if ( $team_members->have_posts()):
                while ($team_members->have_posts()) : $team_members->the_post();
                    $fb_url = get_post_meta( $post->ID, 'fb',true );
                    $linkedin_url = get_post_meta( $post->ID, 'linkedin',true );
                    $dribbble_url = get_post_meta( $post->ID, 'dribbble',true );
                    $behance_url = get_post_meta( $post->ID, 'behance',true );
                    $google_plus_url = get_post_meta( $post->ID, 'google_plus',true );
            ?>
            
                    <div class="item">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        <div class="item-overlay"></div>
                        <div class="item-text">
                            <h3><?php the_title() ?></h3>
                            <h4><?php echo get_the_content(); ?></h4>
                            <p><a href="<?php echo $fb_url; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo $linkedin_url ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="<?php echo $dribbble_url ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="<?php echo $behance_url ?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="<?php echo $google_plus_url ?>"><i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a></p>
                        </div>
                    </div>

                    <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

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
                    <?php echo do_shortcode( '[contact-form-7 id="429" title="Kulo Contact"]' ); ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>