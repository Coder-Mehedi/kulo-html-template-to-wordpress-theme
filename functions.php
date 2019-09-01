<?php 
require_once 'custom_post_type.php';
require_once 'meta_boxes.php';
require_once 'query.php';
require_once 'footer_widget.php';
// add_filter('use_block_editor_for_post', '__return_false', 10);

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