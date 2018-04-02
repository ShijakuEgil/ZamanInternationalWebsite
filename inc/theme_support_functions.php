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
=========================================
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
add_menu_page( 'About Us', 'About Us', 'edit_others_posts', 'about_us_menu', function() { echo 'The About Us Posts'; }, 'dashicons-groups', 7 );
add_menu_page( 'What We Do', 'What We Do', 'edit_others_posts', 'what_we_do_menu', function() { echo 'What We Do Posts'; }, 'dashicons-editor-spellcheck', 8 );
add_menu_page( 'Get Involved', 'Get Involved', 'edit_others_posts', 'get_involved_menu', function() { echo 'Get Involved Posts'; }, 'dashicons-megaphone', 9 );
add_menu_page( 'Events', 'Events', 'edit_others_posts', 'events_menu', function() { echo 'Events Posts'; }, 'dashicons-schedule', 10 );
add_menu_page( 'Donate', 'Donate', 'edit_others_posts', 'donate_menu', function() { echo 'Donate Posts'; }, 'dashicons-heart', 11 );
add_menu_page( 'Contact Us', 'Contact Us', 'edit_others_posts', 'contact_us_menu', function() { echo 'Contact Us Posts'; }, 'dashicons-email-alt', 12 );
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


/*
==========================================
            Options page
==========================================
*/
function zaman_add_admin_page(){
  //adds the zaman menu page
  add_menu_page('Zaman Theme Options', "Zaman", 'manage_options', 'zaman_theme', 'zaman_theme_settings', '' , 110);
  //generate submenu pages
  add_submenu_page( 'zaman_theme', 'Zaman Theme', 'Settings', 'manage_options','zaman_theme', 'zaman_theme_settings' );
  add_submenu_page( 'zaman_theme', 'Social Media', 'Social Media', 'manage_options','zaman_social_media', 'zaman_add_social_media' );
  add_submenu_page( 'zaman_theme', 'Home Popup', 'Home Popup', 'manage_options','zaman_popup', 'zaman_popup_settings' );

  //Activate Custom Settings
  add_action( 'admin_init', 'zaman_custom_settings');
}
add_action( 'admin_menu', 'zaman_add_admin_page' );

function zaman_custom_settings(){
  //social media and icon settings
  register_setting( 'zaman-settings-group', 'zaman_icon' );
  register_setting( 'zaman-settings-group', 'zaman_name' );
  register_setting( 'zaman-settings-group', 'twitter_handler' );
  register_setting( 'zaman-settings-group', 'facebook_handler' );
  register_setting( 'zaman-settings-group', 'instagram_handler' );

//popup admin settings
  register_setting( 'zaman-popup-group', 'popup_image');


// social media and icon admin page
  add_settings_section( 'zaman-theme-options', 'Theme Options', 'zaman_theme_options', 'zaman_theme' );

//popup options admin page
  add_settings_section( 'zaman-popup-options', 'Popup Options', 'zaman_popup_options', 'zaman_popup' );

//social media and icon admin fields
add_settings_field( 'zaman-icon', 'Website Icon', 'zaman_website_icon', 'zaman_theme','zaman-theme-options');
  add_settings_field( 'website-name', 'WebSite Name', 'zaman_website_name', 'zaman_theme','zaman-theme-options');
  add_settings_field( 'zaman-twitter', 'Twitter Handler', 'zaman_twitter', 'zaman_theme', 'zaman-theme-options', 'zaman_sanitize_twitter_handler');
  add_settings_field( 'zaman-facebook', 'Facebook Handler', 'zaman_facebook', 'zaman_theme', 'zaman-theme-options');
  add_settings_field( 'zaman-instagram', 'Instagram Handler', 'zaman_instagram', 'zaman_theme', 'zaman-theme-options');


// popup settings admin fields
  add_settings_field( 'popup-image', 'Popup Image', 'zaman_popup_image', 'zaman_popup', 'zaman-popup-options');
  add_settings_field( 'popup-timer', 'Popup Timer', 'zaman_popup_timer', 'zaman_popup', 'zaman-popup-options');
  add_settings_field( 'popup-heading', 'Popup Heading Text', 'zaman_popup_heading', 'zaman_popup', 'zaman-popup-options' );
  add_settings_field( 'popup-button', 'Popup Button', 'zaman_popup_button', 'zaman_popup', 'zaman-popup-options' );
}

//popup functions
function zaman_popup_options(){

}

function zaman_popup_button(){

}

function zaman_popup_heading(){

}

function zaman_popup_image(){

}

function zaman_popup_timer(){

}


// social media and icon functions
function zaman_theme_options(){
}

function zaman_website_icon(){
  $website_icon = esc_attr( get_option('zaman_icon') );
  echo '<input class="button button-secondary" type="button" value="Upload Website Icon" id="upload-button"><input id="icon-picture" type="hidden" name="zaman_icon" value="'.$website_icon.'"/>';
}

function zaman_website_name(){
  $website_name = esc_attr( get_option('zaman_name') );
  echo '<input type="text" name="zaman_name" value="'.$website_name.'" placeholder="Website Name"/>';
}

function zaman_twitter(){
  $twitter  = esc_attr( get_option('twitter_handler') );
  echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter Handler"/><p class="description">Input your Twitter username without the @ character.</p>';
}

function zaman_facebook(){
  $facebook  = esc_attr( get_option('facebook_handler') );
  echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook Handler"/>';
}

function zaman_instagram(){
  $instagram  = esc_attr( get_option('instagram_handler') );
  echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Instagram Handler"/>';
}
function zaman_theme_create_page(){

}

//Sanitization Settings
 function zaman_sanitize_twitter_handler( $input ){
   $output = sanitize_text_field( $input );
   $output = str_replace('@', '', $output);
   return $output;
 }

function zaman_theme_settings(){
    require_once(get_template_directory().'/inc/templates/zaman-settings.php');
}

function zaman_add_social_media(){
    require_once(get_template_directory().'/inc/templates/zaman-social.php');
}

function zaman_popup_settings(){
    require_once(get_template_directory().'/inc/templates/zaman-popup.php');
}
