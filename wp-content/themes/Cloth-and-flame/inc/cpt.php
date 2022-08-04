<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Team Members.
	 */

	$labels = [
		"name" => __( "Team Members", "cf_" ),
		"singular_name" => __( "Team Members", "cf_" ),
	];

	$args = [
		"label" => __( "Team Members", "cf_" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "team-member", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 42,
		"menu_icon" => "dashicons-admin-users",
		"supports" => [ "title", "thumbnail", "custom-fields", "revisions" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team-member", $args );

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials", "cf_" ),
		"singular_name" => __( "Testimonial", "cf_" ),
	];

	$args = [
		"label" => __( "Testimonials", "cf_" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 46,
		"menu_icon" => "dashicons-testimonial",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonial", $args );

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "cf_" ),
		"singular_name" => __( "Service", "cf_" ),
	];

	$args = [
		"label" => __( "Services", "cf_" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "the-services", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 47,
		"menu_icon" => "dashicons-cart",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions" ],
		"show_in_graphql" => false,
	];

	register_post_type( "the-services", $args );

	/**
	 * Post Type: Works.
	 */

	$labels = [
		"name" => __( "Works", "cf_" ),
		"singular_name" => __( "Work", "cf_" ),
	];

	$args = [
		"label" => __( "Works", "cf_" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "work", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 48,
		"menu_icon" => "dashicons-schedule",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions" ],
		"show_in_graphql" => false,
	];

	register_post_type( "work", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
/////////////////
function cptui_register_my_cpts_team_member() {

	/**
	 * Post Type: Team Members.
	 */

	$labels = [
		"name" => __( "Team Members", "cf_" ),
		"singular_name" => __( "Team Members", "cf_" ),
	];

	$args = [
		"label" => __( "Team Members", "cf_" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "team-member", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 42,
		"menu_icon" => "dashicons-admin-users",
		"supports" => [ "title", "thumbnail", "custom-fields", "revisions" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team-member", $args );
}

add_action( 'init', 'cptui_register_my_cpts_team_member' );

/////////////////////
function cptui_register_my_cpts_testimonial() {

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials", "cf_" ),
		"singular_name" => __( "Testimonial", "cf_" ),
	];

	$args = [
		"label" => __( "Testimonials", "cf_" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 46,
		"menu_icon" => "dashicons-testimonial",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonial", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonial' );
//////////////////////////
function cptui_register_my_cpts_the_services() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "cf_" ),
		"singular_name" => __( "Service", "cf_" ),
	];

	$args = [
		"label" => __( "Services", "cf_" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "the-services", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 47,
		"menu_icon" => "dashicons-cart",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "revisions" ],
		"show_in_graphql" => false,
	];

	register_post_type( "the-services", $args );
}

add_action( 'init', 'cptui_register_my_cpts_the_services' );
/////////////////

function cptui_register_my_cpts_work() {

	/**
	 * Post Type: Works.
	 */

	$labels = [
		"name" => __( "Works", "cf_" ),
		"singular_name" => __( "Work", "cf_" ),
	];

	$args = [
		"label" => __( "Works", "cf_" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "work", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 48,
		"menu_icon" => "dashicons-schedule",
		"supports" => [ "title", "editor", "excerpt", "thumbnail", "custom-fields", "revisions" ],
		"show_in_graphql" => false,
	];

	register_post_type( "work", $args );
}

add_action( 'init', 'cptui_register_my_cpts_work' );
///////////////////////
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Work Categories.
	 */

	$labels = [
		"name" => __( "Work Categories", "cf_" ),
		"singular_name" => __( "Work Category", "cf_" ),
	];

	
	$args = [
		"label" => __( "Work Categories", "cf_" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'work_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "work_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "work_category", [ "work" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
////////////////////


function cptui_register_my_taxes_work_category() {

	/**
	 * Taxonomy: Work Categories.
	 */

	$labels = [
		"name" => __( "Work Categories", "cf_" ),
		"singular_name" => __( "Work Category", "cf_" ),
	];

	
	$args = [
		"label" => __( "Work Categories", "cf_" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'work_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "work_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "work_category", [ "work" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_work_category' );
