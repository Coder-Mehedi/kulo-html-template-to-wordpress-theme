<?php 
add_filter('use_block_editor_for_post', '__return_false', 10);

function kulo_theme_files() {
	wp_enqueue_style( 'bootStrap', get_template_directory_uri(). '/css/bootstrap.css', array(), '1.0' , 'all' );
	wp_enqueue_style( 'fontAwesome', get_template_directory_uri(). '/css/font-awesome.min.css', array(), '1.0', 'all');

	wp_enqueue_style( 'owlCarousel', get_template_directory_uri(). '/css/owl.carousel.min.css', array(), '1.0', 'all');

	wp_enqueue_style( 'owlThemeDefault', get_template_directory_uri(). '/css/owl.theme.default.min.css', array(), '1.0', 'all');

	wp_enqueue_style( 'kuloStyle', get_stylesheet_uri());

	wp_enqueue_style( 'responsive', get_template_directory_uri(). '/responsive.css', array(), '1.0', 'all');


	wp_enqueue_script( 'bootStrap',get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'owlCarousel',get_template_directory_uri(). '/js/owl.carousel.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'active',get_template_directory_uri(). '/js/active.js', array('jquery'), '1.0', true );
}

add_action('wp_enqueue_scripts', 'kulo_theme_files');



function kulo_theme_supports() {
	// loading theme textdomain
	load_theme_textdomain( 'esoftkulo', get_template_directory(). '/languages');

	// Generate automated feedlink on head
	add_theme_support( 'automatic-feed-links' );

	// adding support for automatic title tag
	add_theme_support( 'title-tag' );

	// enablingpost thumbnail support
	add_theme_support( 'post-thumbnails' );

	add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

	add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);
function themename_custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

}

add_action('after_setup_theme', 'kulo_theme_supports'); 

register_nav_menus([
	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu'
]);

function kulo_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Primary Sidebar', 'esoftkulo' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'esoftkulo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'kulo_widgets_init' );


function cptui_register_my_cpts_top_banner() {

	/**
	 * Post Type: Top Banners.
	 */

	$labels = array(
		"name" => __( "Top Banners", "esoftkulo" ),
		"singular_name" => __( "Top Banner", "esoftkulo" ),
	);

	$args = array(
		"label" => __( "Top Banners", "esoftkulo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		'capabilities' => array(
		    'create_posts' => 'do_not_allow'
		  ),
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "top_banner", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "custom-fields", "thumbnail", "page-attributes" )
	);

	register_post_type( "top_banner", $args );
}

add_action( 'init', 'cptui_register_my_cpts_top_banner' );


function cptui_register_my_cpts_steps() {

	/**
	 * Post Type: Steps.
	 */

	$labels = array(
		"name" => __( "Steps", "esoftkulo" ),
		"singular_name" => __( "Step", "esoftkulo" ),
		"edit_item" => __( "Edit Item", "esoftkulo" ),
		"featured_image" => __( "Image for this item", "esoftkulo" ),
	);

	$args = array(
		"label" => __( "Steps", "esoftkulo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "steps", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "steps", $args );
}

add_action( 'init', 'cptui_register_my_cpts_steps' );



function cptui_register_my_cpts_step_items() {

	/**
	 * Post Type: Step Items.
	 */

	$labels = array(
		"name" => __( "Step Items", "esoftkulo" ),
		"singular_name" => __( "Step Item", "esoftkulo" ),
	);

	$args = array(
		"label" => __( "Step Items", "esoftkulo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "step_items", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "custom-fields", "thumbnail" ),
	);

	register_post_type( "step_items", $args );
}

add_action( 'init', 'cptui_register_my_cpts_step_items' );
