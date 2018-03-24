<?php
//HOME PAGE CAROUSEL POST TYPE FOR IMAGES
function zaman_register_home_carousel() {

	$args = array (
		  'label' => esc_html__( 'Home Carousel', 'text-domain' ),
		  'labels' => array(
			'menu_name' => esc_html__( 'Home Carousel', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Home Carousel', 'text-domain' ),
			'add_new' => esc_html__( 'Add new', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new Home Carousel', 'text-domain' ),
			'new_item' => esc_html__( 'New Home Carousel', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Home Carousel', 'text-domain' ),
			'view_item' => esc_html__( 'View Home Carousel', 'text-domain' ),
			'update_item' => esc_html__( 'Update Home Carousel', 'text-domain' ),
			'all_items' => esc_html__( 'All Home Carousel', 'text-domain' ),
			'search_items' => esc_html__( 'Search Home Carousel', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent Home Carousel', 'text-domain' ),
			'not_found' => esc_html__( 'No Home Carousel found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No Home Carousel found in Trash', 'text-domain' ),
			'name' => esc_html__( 'Home Carousel', 'text-domain' ),
			'singular_name' => esc_html__( 'Home Carousel', 'text-domain' ),

		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		// 'show_in_menu' => true,
		'show_in_menu' => 'home_page_menu',
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'menu_icon' => 'dashicons-format-gallery',
		'capability_type' => 'post',
		'hierarchical' => true,
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

	register_post_type( 'home-carousel', $args );
}
add_action( 'init', 'zaman_register_home_carousel' );

//TIMELINE FOR OUR HISTORY PAGE

function zaman_register_history_timeline() {

	$args = array (
		'label' => esc_html__( 'History Timelines', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'History Timeline', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'History Timeline', 'text-domain' ),
			'add_new' => esc_html__( 'Add new Timeline', 'text-domain' ),
			'add_new_item' => esc_html__( 'Add new History Timeline', 'text-domain' ),
			'new_item' => esc_html__( 'New History Timeline', 'text-domain' ),
			'edit_item' => esc_html__( 'Edit Timeline', 'text-domain' ),
			'view_item' => esc_html__( 'View History Timeline', 'text-domain' ),
			'update_item' => esc_html__( 'Update History Timeline', 'text-domain' ),
			'all_items' => esc_html__( 'All History Timelines', 'text-domain' ),
			'search_items' => esc_html__( 'Search History Timelines', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Parent History Timeline', 'text-domain' ),
			'not_found' => esc_html__( 'No History Timelines found', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'No History Timelines found in Trash', 'text-domain' ),
			'name' => esc_html__( 'History Timelines', 'text-domain' ),
			'singular_name' => esc_html__( 'History Timeline', 'text-domain' ),
		),
		'public' => true,
		'description' => 'Each post represent a time period in the history timeline',
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
			'thumbnail',
		),
		'rewrite' => true,
	);

	register_post_type( 'history-timeline', $args );
}
add_action( 'init', 'zaman_register_history_timeline' );

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

	register_post_type( 'hope-4-humanity', $args );
}
add_action( 'init', 'zaman_register_hope_4_humanity' );


//TEAM MEMBERS

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
		'show_in_menu' => 'home_page_menu',
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
