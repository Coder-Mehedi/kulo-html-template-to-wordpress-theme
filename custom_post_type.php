<?php

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



function cptui_register_my_cpts_how_it_works() {

	/**
	 * Post Type: How It Works.
	 */

	$labels = array(
		"name" => __( "How It Works", "esoftkulo" ),
		"singular_name" => __( "How it Work", "esoftkulo" ),
	);

	$args = array(
		"label" => __( "How It Works", "esoftkulo" ),
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
		"rewrite" => array( "slug" => "how_it_works", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "custom-fields", "thumbnail" ),
	);

	register_post_type( "how_it_works", $args );
}

add_action( 'init', 'cptui_register_my_cpts_how_it_works' );



function cptui_register_my_cpts_we_did() {

	/**
	 * Post Type: What We Did.
	 */

	$labels = array(
		"name" => __( "What We Did", "esoftkulo" ),
		"singular_name" => __( "We Did Item", "esoftkulo" ),
	);

	$args = array(
		"label" => __( "What We Did", "esoftkulo" ),
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
		"rewrite" => array( "slug" => "we_did", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "we_did", $args );
}

add_action( 'init', 'cptui_register_my_cpts_we_did' );





function cptui_register_my_cpts_team_members() {

	/**
	 * Post Type: Team Members.
	 */

	$labels = array(
		"name" => __( "Team Members", "esoftkulo" ),
		"singular_name" => __( "Team Member", "esoftkulo" ),
	);

	$args = array(
		"label" => __( "Team Members", "esoftkulo" ),
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
		"rewrite" => array( "slug" => "team_members", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "team_members", $args );
}

add_action( 'init', 'cptui_register_my_cpts_team_members' );
