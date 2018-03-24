<?php
/*
==========================================
          Regisster Menus Function
==========================================
*/
function zaman_theme_setup(){
  add_theme_support( 'menus' );
  register_nav_menus(
    array(
      'primary'     => __('Header Menu', 'zaman-website-theme'),
      'secondary'   => __('Footer Menu', 'zaman-website-theme'),
    )
  );
}
add_action( 'init', 'zaman_theme_setup');

/*
==========================================
          Register Sidebar Function
==========================================
*/

function zaman_widget_setup() {

	register_sidebar(
		array(
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
  register_sidebar(
    array(
      'name'	=> 'Calendar Sidebar',
      'id'	=> 'sidebar-calendar',
      'class'	=> 'custom',
      'description' => 'Calendar Page Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    )
  );
}
add_action('widgets_init','zaman_widget_setup');

/*
==========================================
          Filter the Excerpt length Function
==========================================
*/
/**
 * Filter the except length to 25 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 25;//the amount of words the excerpt shows
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// theme support functions
add_theme_support( 'post-thumbnails');
add_theme_support( 'html5', array('search-form') );


/*
==========================================
      Remove Default Post Type
==========================================
*/
add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type(){
  remove_menu_page('edit.php');
}

/*
==========================================
      Add Menu Grouping Options
==========================================
*/
add_action( 'admin_menu', 'register_my_page' );
function register_my_page() {
add_menu_page( 'Home Page', 'Home Page', 'edit_others_posts', 'home_page_menu', function() { echo 'The Home Page Posts'; }, 'dashicons-admin-home', 6 );
add_menu_page( 'About Us', 'About Us', 'edit_others_posts', 'about_us_menu', function() { echo 'The About Us Posts'; }, 'dashicons-groups', 6 );
}

/*
==========================================
Add google maps api key for acf fields
==========================================
*/
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyA_6oZOskYt1IaUHzjhewzivrDtqFgj9QA';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// if( function_exists('acf_add_options_page') ) {
// 	$page = acf_add_options_page(array(
// 		'page_title' 	=> 'Options',
// 		'menu_title' 	=> 'Options',
// 		'menu_slug' 	=> 'site_options',
// 		'capability' 	=> 'edit_posts',
// 		'icon_url' => 'dashicons-dashboard',
// 		'redirect' 	=> false
// 	));
// }
