<?php

	// Top Header Query
    $top_banner = new WP_Query(['post_type' => 'top_banner']);
     
    if ( $top_banner->have_posts() ) :
	    while ( $top_banner->have_posts() ) : $top_banner->the_post();
		   	$main_title = get_the_title();
		   	$main_content = get_the_content();

		    $background_url = get_the_post_thumbnail_url();

		    $left_btn_text = get_post_meta( $post->ID, 'left_btn_text',true );
		    $left_btn_url = get_post_meta( $post->ID, 'left_btn_url',true );

		    $right_btn_text = get_post_meta( $post->ID, 'right_btn_text',true );
		    $right_btn_url = get_post_meta( $post->ID, 'right_btn_url',true );

	    endwhile;
	    wp_reset_postdata();
    endif;



    // Steps Query
    $steps = new WP_Query(['post_type' => 'steps']);
    
    if ( $steps->have_posts() ) :
     
        while ( $steps->have_posts() ) : $steps->the_post();            
        $steps_title = get_the_title();
        $steps_content = get_the_content();

	    endwhile;
	    wp_reset_postdata();
	endif;


	// how it works
    $how_it_works = new WP_Query(['post_type' => 'how_it_works', 'posts_per_page' => 3]);
	if ( $how_it_works->have_posts()):
        while ($how_it_works->have_posts()) : $how_it_works->the_post();
            $video_id = get_post_meta( $post->ID, "video_id", true );
            $hit_title = get_the_title();
            $hit_content = get_the_content();
        endwhile;
		wp_reset_postdata();

    endif;
