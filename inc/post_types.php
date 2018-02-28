<?php
// 
// //TIMELINE
//
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'Timeline Posts', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'Timeline Posts', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'Timeline Post', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new Timeline Post', 'text-domain' ),
// 			'new_item' => esc_html__( 'New Timeline Post', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit Timeline Post', 'text-domain' ),
// 			'view_item' => esc_html__( 'View Timeline Post', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update Timeline Post', 'text-domain' ),
// 			'all_items' => esc_html__( 'All Timeline Posts', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search Timeline Posts', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent Timeline Post', 'text-domain' ),
// 			'not_found' => esc_html__( 'No Timeline Posts found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No Timeline Posts found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'Timeline Posts', 'text-domain' ),
// 			'singular_name' => esc_html__( 'Timeline Post', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'menu_icon' => 'dashicons-editor-ol',
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'thumbnail',
// 		),
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'timeline', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
//
// //CONTACT US DEPARTMENTS
//
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'Contact Us Departments', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'Contact Us Departments', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'Contact Us Departments', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new Contact Us Departments', 'text-domain' ),
// 			'new_item' => esc_html__( 'New Contact Us Departments', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit Contact Us Departments', 'text-domain' ),
// 			'view_item' => esc_html__( 'View Contact Us Departments', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update Contact Us Departments', 'text-domain' ),
// 			'all_items' => esc_html__( 'All Contact Us Departments', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search Contact Us Departments', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent Contact Us Departments', 'text-domain' ),
// 			'not_found' => esc_html__( 'No Contact Us Departments found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No Contact Us Departments found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'Contact Us Departments', 'text-domain' ),
// 			'singular_name' => esc_html__( 'Contact Us Departments', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'menu_icon' => 'dashicons-email-alt',
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'thumbnail',
// 		),
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'contact-us-dpt', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
//
// //HOPE 4 HUMANITY
//
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'Hope 4 Humanity Posts', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'Hope 4 Humanity Posts', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'Hope 4 Humanity Post', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new Hope 4 Humanity Post', 'text-domain' ),
// 			'new_item' => esc_html__( 'New Hope 4 Humanity Post', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit Hope 4 Humanity Post', 'text-domain' ),
// 			'view_item' => esc_html__( 'View Hope 4 Humanity Post', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update Hope 4 Humanity Post', 'text-domain' ),
// 			'all_items' => esc_html__( 'All Hope 4 Humanity Posts', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search Hope 4 Humanity Posts', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent Hope 4 Humanity Post', 'text-domain' ),
// 			'not_found' => esc_html__( 'No Hope 4 Humanity Posts found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No Hope 4 Humanity Posts found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'Hope 4 Humanity Posts', 'text-domain' ),
// 			'singular_name' => esc_html__( 'Hope 4 Humanity Post', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'menu_icon' => 'dashicons-heart',
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'thumbnail',
// 		),
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'hope-4-humanity-post', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
//
//
// //BOARD MEMBERS
//
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'Board Members', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'Board Members', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'Board Member', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new Board Member', 'text-domain' ),
// 			'new_item' => esc_html__( 'New Board Member', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit Board Member', 'text-domain' ),
// 			'view_item' => esc_html__( 'View Board Member', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update Board Member', 'text-domain' ),
// 			'all_items' => esc_html__( 'All Board Members', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search Board Members', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent Board Member', 'text-domain' ),
// 			'not_found' => esc_html__( 'No Board Members found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No Board Members found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'Board Members', 'text-domain' ),
// 			'singular_name' => esc_html__( 'Board Member', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'menu_icon' => 'dashicons-businessman',
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'thumbnail',
// 		),
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'board-member', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
//
// //TEAM MEMBERS
//
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'Team Members', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'Team Members', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'Team Member', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new Team Member', 'text-domain' ),
// 			'new_item' => esc_html__( 'New Team Member', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit Team Member', 'text-domain' ),
// 			'view_item' => esc_html__( 'View Team Member', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update Team Member', 'text-domain' ),
// 			'all_items' => esc_html__( 'All Team Members', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search Team Members', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent Team Member', 'text-domain' ),
// 			'not_found' => esc_html__( 'No Team Members found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No Team Members found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'Team Members', 'text-domain' ),
// 			'singular_name' => esc_html__( 'Team Member', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'menu_icon' => 'dashicons-admin-users',
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'thumbnail',
// 		),
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'team-member', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
//
// //NEWS POST
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'News', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'News', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'News', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new News', 'text-domain' ),
// 			'new_item' => esc_html__( 'New News', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit News', 'text-domain' ),
// 			'view_item' => esc_html__( 'View News', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update News', 'text-domain' ),
// 			'all_items' => esc_html__( 'All News', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search News', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent News', 'text-domain' ),
// 			'not_found' => esc_html__( 'No News found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No News found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'News', 'text-domain' ),
// 			'singular_name' => esc_html__( 'News', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'menu_icon' => 'dashicons-format-aside',
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'author',
// 			'thumbnail',
// 			'excerpt',
// 		),
// 		'taxonomies' => array(
// 			'category',
// 			'post_tag',
// 		),
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'news', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
//
// //EVENT POST
//
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'Events', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'Events', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'Event', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new Event', 'text-domain' ),
// 			'new_item' => esc_html__( 'New Event', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit Event', 'text-domain' ),
// 			'view_item' => esc_html__( 'View Event', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update Event', 'text-domain' ),
// 			'all_items' => esc_html__( 'All Events', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search Events', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent Event', 'text-domain' ),
// 			'not_found' => esc_html__( 'No Events found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No Events found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'Events', 'text-domain' ),
// 			'singular_name' => esc_html__( 'Event', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'menu_icon' => 'dashicons-megaphone',
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'thumbnail',
// 		),
// 		'taxonomies' => array(
// 			'category',
// 			'post_tag',
// 		),
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'event', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
//
// //BLOG POST
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'Blog Posts', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'Blog Posts', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'Blog Post', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new Blog Post', 'text-domain' ),
// 			'new_item' => esc_html__( 'New Blog Post', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit Blog Post', 'text-domain' ),
// 			'view_item' => esc_html__( 'View Blog Post', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update Blog Post', 'text-domain' ),
// 			'all_items' => esc_html__( 'All Blog Posts', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search Blog Posts', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent Blog Post', 'text-domain' ),
// 			'not_found' => esc_html__( 'No Blog Posts found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No Blog Posts found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'Blog Posts', 'text-domain' ),
// 			'singular_name' => esc_html__( 'Blog Post', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'menu_icon' => 'dashicons-editor-quote',
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'author',
// 			'thumbnail',
// 			'excerpt',
// 		),
// 		'taxonomies' => array(
// 			'category',
// 			'post_tag',
// 		),
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'blog-post', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
//
// //ANIMATED HEADING
// function your_prefix_register_post_type() {
//
// 	$args = array (
// 		'label' => esc_html__( 'Animated Heading', 'text-domain' ),
// 		'labels' => array(
// 			'menu_name' => esc_html__( 'Animated Heading', 'text-domain' ),
// 			'name_admin_bar' => esc_html__( 'Animated Heading', 'text-domain' ),
// 			'add_new' => esc_html__( 'Add new', 'text-domain' ),
// 			'add_new_item' => esc_html__( 'Add new Animated Heading', 'text-domain' ),
// 			'new_item' => esc_html__( 'New Animated Heading', 'text-domain' ),
// 			'edit_item' => esc_html__( 'Edit Animated Heading', 'text-domain' ),
// 			'view_item' => esc_html__( 'View Animated Heading', 'text-domain' ),
// 			'update_item' => esc_html__( 'Update Animated Heading', 'text-domain' ),
// 			'all_items' => esc_html__( 'All Animated Heading', 'text-domain' ),
// 			'search_items' => esc_html__( 'Search Animated Heading', 'text-domain' ),
// 			'parent_item_colon' => esc_html__( 'Parent Animated Heading', 'text-domain' ),
// 			'not_found' => esc_html__( 'No Animated Heading found', 'text-domain' ),
// 			'not_found_in_trash' => esc_html__( 'No Animated Heading found in Trash', 'text-domain' ),
// 			'name' => esc_html__( 'Animated Heading', 'text-domain' ),
// 			'singular_name' => esc_html__( 'Animated Heading', 'text-domain' ),
// 		),
// 		'public' => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_nav_menus' => true,
// 		'show_in_menu' => true,
// 		'show_in_admin_bar' => false,
// 		'show_in_rest' => false,
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite_no_front' => false,
// 		'supports' => array(
// 			'title',
// 			'custom-fields',
// 		),
// 		'menu_icon' => 'dashicons-admin-home',
// 		'rewrite' => true,
// 	);
//
// 	register_post_type( 'animated-heading', $args );
// }
// add_action( 'init', 'your_prefix_register_post_type' );
