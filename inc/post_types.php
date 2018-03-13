<?php

//TIMELINE

function zaman_register_timeline() {

	$args = array (
		'label' => esc_html__( 'Timeline Posts', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Timeline Posts', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Timeline Post', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Timeline Post', 'text-domain' ),
			'new_item' => esc_html__( 'New Timeline Post', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Timeline Post', 'text-domain' ),
			'view_item' => esc_html__( 'View Timeline Post', 'text-domain' ),
			'update_item' => esc_html__( 'Update Timeline Post', 'text-domain' ),
			'all_items' => esc_html__( 'All Timeline Posts', 'text-domain' ),
			'search_items' => esc_html__( 'Search Timeline Posts', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Timeline Post', 'text-domain' ),
			'not_found' => esc_html__( 'No Timeline Posts found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Timeline Posts found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Timeline Posts', 'text-domain' ),
			'singular_name' => esc_html__( 'Timeline Post', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-editor-ol',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'rewrite' => true,
	);

	register_post_type( 'timeline', $args );
}
add_action( 'init', 'zaman_register_timeline' );

//CONTACT US DEPARTMENTS

function zaman_register_contact_us() {

	$args = array (
		'label' => esc_html__( 'Contact Us Departments', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Contact Us Departments', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Contact Us Departments', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Contact Us Departments', 'text-domain' ),
			'new_item' => esc_html__( 'New Contact Us Departments', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Contact Us Departments', 'text-domain' ),
			'view_item' => esc_html__( 'View Contact Us Departments', 'text-domain' ),
			'update_item' => esc_html__( 'Update Contact Us Departments', 'text-domain' ),
			'all_items' => esc_html__( 'All Contact Us Departments', 'text-domain' ),
			'search_items' => esc_html__( 'Search Contact Us Departments', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Contact Us Departments', 'text-domain' ),
			'not_found' => esc_html__( 'No Contact Us Departments found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Contact Us Departments found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Contact Us Departments', 'text-domain' ),
			'singular_name' => esc_html__( 'Contact Us Departments', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-email-alt',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'thumbnail',
		),
		'rewrite' => true,
	);

	register_post_type( 'contact-us-dpt', $args );
}
add_action( 'init', 'zaman_register_contact_us' );

//HOPE 4 HUMANITY

function zaman_register_hope_4_humanity() {

	$args = array (
		'label' => esc_html__( 'Hope 4 Humanity Posts', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Hope 4 Humanity Posts', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Hope 4 Humanity Post', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Hope 4 Humanity Post', 'text-domain' ),
			'new_item' => esc_html__( 'New Hope 4 Humanity Post', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Hope 4 Humanity Post', 'text-domain' ),
			'view_item' => esc_html__( 'View Hope 4 Humanity Post', 'text-domain' ),
			'update_item' => esc_html__( 'Update Hope 4 Humanity Post', 'text-domain' ),
			'all_items' => esc_html__( 'All Hope 4 Humanity Posts', 'text-domain' ),
			'search_items' => esc_html__( 'Search Hope 4 Humanity Posts', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Hope 4 Humanity Post', 'text-domain' ),
			'not_found' => esc_html__( 'No Hope 4 Humanity Posts found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Hope 4 Humanity Posts found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Hope 4 Humanity Posts', 'text-domain' ),
			'singular_name' => esc_html__( 'Hope 4 Humanity Post', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-heart',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'rewrite' => true,
	);

	register_post_type( 'hope-4-humanity-post', $args );
}
add_action( 'init', 'zaman_register_hope_4_humanity' );


//BOARD MEMBERS

function zaman_register_board_members() {

	$args = array (
		'label' => esc_html__( 'Board Members', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Board Members', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Board Member', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Board Member', 'text-domain' ),
			'new_item' => esc_html__( 'New Board Member', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Board Member', 'text-domain' ),
			'view_item' => esc_html__( 'View Board Member', 'text-domain' ),
			'update_item' => esc_html__( 'Update Board Member', 'text-domain' ),
			'all_items' => esc_html__( 'All Board Members', 'text-domain' ),
			'search_items' => esc_html__( 'Search Board Members', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Board Member', 'text-domain' ),
			'not_found' => esc_html__( 'No Board Members found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Board Members found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Board Members', 'text-domain' ),
			'singular_name' => esc_html__( 'Board Member', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-businessman',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'rewrite' => true,
	);

	register_post_type( 'board-member', $args );
}
add_action( 'init', 'zaman_register_board_members' );

//TEAM MEMBERS

function zaman_register_team_members() {

	$args = array (
		'label' => esc_html__( 'Team Members', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Team Members', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Team Member', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Team Member', 'text-domain' ),
			'new_item' => esc_html__( 'New Team Member', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Team Member', 'text-domain' ),
			'view_item' => esc_html__( 'View Team Member', 'text-domain' ),
			'update_item' => esc_html__( 'Update Team Member', 'text-domain' ),
			'all_items' => esc_html__( 'All Team Members', 'text-domain' ),
			'search_items' => esc_html__( 'Search Team Members', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Team Member', 'text-domain' ),
			'not_found' => esc_html__( 'No Team Members found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Team Members found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Team Members', 'text-domain' ),
			'singular_name' => esc_html__( 'Team Member', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-admin-users',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'rewrite' => true,
	);

	register_post_type( 'team-member', $args );
}
add_action( 'init', 'zaman_register_team_members' );

//NEWS POST
function zaman_register_news() {

	$args = array (
		'label' => esc_html__( 'News', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'News', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'News', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new News', 'text-domain' ),
			'new_item' => esc_html__( 'New News', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit News', 'text-domain' ),
			'view_item' => esc_html__( 'View News', 'text-domain' ),
			'update_item' => esc_html__( 'Update News', 'text-domain' ),
			'all_items' => esc_html__( 'All News', 'text-domain' ),
			'search_items' => esc_html__( 'Search News', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent News', 'text-domain' ),
			'not_found' => esc_html__( 'No News found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No News found in Trash', 'text-domain' ),
			'name' => esc_html__( 'News', 'text-domain' ),
			'singular_name' => esc_html__( 'News', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-format-aside',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
		),
		'taxonomies' => array(
			'category',
			'post_tag',
		),
		'rewrite' => true,
	);

	register_post_type( 'news', $args );
}
add_action( 'init', 'zaman_register_news' );

//EVENT POST



function zaman_register_calendar() {

	$args = array (
		'label' => esc_html__( 'Calendar', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Calendar', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Calendar event', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Calendar event', 'text-domain' ),
			'new_item' => esc_html__( 'New Calendar event', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Calendar event', 'text-domain' ),
			'view_item' => esc_html__( 'View Calendar event', 'text-domain' ),
			'update_item' => esc_html__( 'Update Calendar event', 'text-domain' ),
			'all_items' => esc_html__( 'All Calendar', 'text-domain' ),
			'search_items' => esc_html__( 'Search Calendar', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Calendar event', 'text-domain' ),
			'not_found' => esc_html__( 'No Calendar found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Calendar found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Calendar', 'text-domain' ),
			'singular_name' => esc_html__( 'Calendar event', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-calendar-alt',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'taxonomies' => array(
			'category',
			'post_tag',
		),
		'rewrite' => true,
	);

	register_post_type( 'event', $args );
}
add_action( 'init', 'zaman_register_calendar' );

//BLOG POST
function zaman_register_blog() {

	$args = array (
		'label' => esc_html__( 'Blog Posts', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Blog Posts', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Blog Post', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Blog Post', 'text-domain' ),
			'new_item' => esc_html__( 'New Blog Post', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Blog Post', 'text-domain' ),
			'view_item' => esc_html__( 'View Blog Post', 'text-domain' ),
			'update_item' => esc_html__( 'Update Blog Post', 'text-domain' ),
			'all_items' => esc_html__( 'All Blog Posts', 'text-domain' ),
			'search_items' => esc_html__( 'Search Blog Posts', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Blog Post', 'text-domain' ),
			'not_found' => esc_html__( 'No Blog Posts found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Blog Posts found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Blog Posts', 'text-domain' ),
			'singular_name' => esc_html__( 'Blog Post', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-editor-quote',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
		),
		'taxonomies' => array(
			'category',
			'post_tag',
		),
		'rewrite' => true,
	);

	register_post_type( 'blog-post', $args );
}
add_action( 'init', 'zaman_register_blog' );

//ANIMATED HEADING
function zaman_register_animated_heading() {

	$args = array (
		'label' => esc_html__( 'Animated Heading', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Animated Heading', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Animated Heading', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Animated Heading', 'text-domain' ),
			'new_item' => esc_html__( 'New Animated Heading', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Animated Heading', 'text-domain' ),
			'view_item' => esc_html__( 'View Animated Heading', 'text-domain' ),
			'update_item' => esc_html__( 'Update Animated Heading', 'text-domain' ),
			'all_items' => esc_html__( 'All Animated Heading', 'text-domain' ),
			'search_items' => esc_html__( 'Search Animated Heading', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Animated Heading', 'text-domain' ),
			'not_found' => esc_html__( 'No Animated Heading found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Animated Heading found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Animated Heading', 'text-domain' ),
			'singular_name' => esc_html__( 'Animated Heading', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'custom-fields',
		),
		'menu_icon' => 'dashicons-admin-home',
		'rewrite' => true,
	);

	register_post_type( 'animated-heading', $args );
}
add_action( 'init', 'zaman_register_animated_heading' );
function cptui_register_my_cpts() {

	/**
	 * Post Type: Slides.
	 */

	$labels = array(
		"name" => __( "Slides", "" ),
		"singular_name" => __( "Slide", "" ),
		"menu_name" => __( "Home Page Slides", "" ),
		"all_items" => __( "All Slides", "" ),
		"add_new" => __( "Add New Slide", "" ),
		"add_new_item" => __( "New Slide", "" ),
		"edit_item" => __( "Edit Slide", "" ),
		"view_items" => __( "View Slides", "" ),
		"not_found_in_trash" => __( "No Slides Found", "" ),
		"featured_image" => __( "Slide For Home Slider", "" ),
		"set_featured_image" => __( "Set Slide Image", "" ),
		"remove_featured_image" => __( "Remove Slide Image", "" ),
	);

	$args = array(
		"label" => __( "Slides", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "home_page_slides", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "author" ),
		"taxonomies" => array( "post_tag" ),
	);

	register_post_type( "home_page_slides", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function zaman_register_donation_bins() {

	$args = array (
		'label' => esc_html__( 'Donation Bins', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Donation Bins', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Donation Bin', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Donation Bin', 'text-domain' ),
			'new_item' => esc_html__( 'New Donation Bin', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Donation Bin', 'text-domain' ),
			'view_item' => esc_html__( 'View Donation Bin', 'text-domain' ),
			'update_item' => esc_html__( 'Update Donation Bin', 'text-domain' ),
			'all_items' => esc_html__( 'All Donation Bins', 'text-domain' ),
			'search_items' => esc_html__( 'Search Donation Bins', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Donation Bin', 'text-domain' ),
			'not_found' => esc_html__( 'No Donation Bins found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Donation Bins found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Donation Bins', 'text-domain' ),
			'singular_name' => esc_html__( 'Donation Bin', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-location-alt',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'rewrite' => true,
	);

	register_post_type( 'donation-bin', $args );
}
add_action( 'init', 'zaman_register_donation_bins' );
