<?php
/*
==========================================
// NOTE: Regisster Menus Function
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
// NOTE: Register Sidebar Function
==========================================
*/

function zaman_widget_setup() {

	// register_sidebar(
	// 	array(
	// 		'name'	=> 'Sidebar',
	// 		'id'	=> 'sidebar-1',
	// 		'class'	=> 'custom',
	// 		'description' => 'Standard Sidebar',
	// 		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</aside>',
	// 		'before_title'  => '<h1 class="widget-title">',
	// 		'after_title'   => '</h1>',
	// 	)
	// );
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
// NOTE: Filter the Excerpt length Function
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
// NOTE: Remove Default Post Type
=========================================
*/
// add_action('admin_menu', 'remove_default_post_type');
//
// function remove_default_post_type(){
//   remove_menu_page('edit.php');
// }

/*
==========================================
// NOTE: Add Menu Grouping Options
==========================================
*/
add_action( 'admin_menu', 'register_my_page' );
function register_my_page() {
    add_menu_page( 'Home Page', 'Home Page', 'edit_others_posts', 'home_page_menu', function() { echo 'The Home Page Posts'; }, 'dashicons-admin-home', 20);
    add_menu_page( 'About Us', 'About Us', 'edit_others_posts', 'about_us_menu', function() { echo 'The About Us Posts'; }, 'dashicons-groups', 21 );
    add_menu_page( 'What We Do', 'What We Do', 'edit_others_posts', 'what_we_do_menu', function() { echo 'What We Do Posts'; }, 'dashicons-editor-spellcheck', 22 );
    add_menu_page( 'Get Involved', 'Get Involved', 'edit_others_posts', 'get_involved_menu', function() { echo 'Get Involved Posts'; }, 'dashicons-megaphone', 23);
    add_menu_page( 'Events', 'Events', 'edit_others_posts', 'events_menu', function() { echo 'Events Posts'; }, 'dashicons-schedule', 24);
    add_menu_page( 'Donate', 'Donate', 'edit_others_posts', 'donate_menu', function() { echo 'Donate Posts'; }, 'dashicons-heart', 25 );
    add_menu_page( 'Contact Us', 'Contact Us', 'edit_others_posts', 'contact_us_menu', function() { echo 'Contact Us Posts'; }, 'dashicons-email-alt', 26 );
}

/*
==========================================
// NOTE: Add google maps api key for acf fields
==========================================
*/
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyA_6oZOskYt1IaUHzjhewzivrDtqFgj9QA';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


//===============================================================================
/*  ucc_get_calendar() :: Extends get_calendar() by including custom post types.
 *  Derived from get_calendar() code in /wp-includes/general-template.php.
 */

// function ucc_get_calendar( $post_types = 'event' , $initial = true , $echo = true ) {
//   global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;
//
//   if ( empty( $post_types ) || !is_array( $post_types ) ) {
//     $args = array(
//       'public' => true ,
//       '_builtin' => false
//     );
//     $output = 'names';
//     $operator = 'and';
//
//     $post_types = get_post_types( $args , $output , $operator );
//     $post_types = array_merge( $post_types , array( 'post' ) );
//   } else {
//     /* Trust but verify. */
//     $my_post_types = array();
//     foreach ( $post_types as $post_type ) {
//       if ( post_type_exists( $post_type ) )
//         $my_post_types[] = $post_type;
//     }
//     $post_types = $my_post_types;
//   }
//   $post_types_key = implode( '' , $post_types );
//   $post_types = "'" . implode( "' , '" , $post_types ) . "'";
//
//   $cache = array();
//   $key = md5( $m . $monthnum . $year . $post_types_key );
//   if ( $cache = wp_cache_get( 'get_calendar' , 'calendar' ) ) {
//     if ( is_array( $cache ) && isset( $cache[$key] ) ) {
//       remove_filter( 'get_calendar' , 'ucc_get_calendar_filter' );
//       $output = apply_filters( 'get_calendar',  $cache[$key] );
//       add_filter( 'get_calendar' , 'ucc_get_calendar_filter' );
//       if ( $echo ) {
//         echo $output;
//         return;
//       } else {
//         return $output;
//       }
//     }
//   }
//
//   if ( !is_array( $cache ) )
//     $cache = array();
//
//   // Quick check. If we have no posts at all, abort!
//   if ( !$posts ) {
//     $sql = "SELECT 1 as test FROM $wpdb->posts WHERE post_type IN ( $post_types ) AND post_status = 'publish' LIMIT 1";
//     $gotsome = $wpdb->get_var( $sql );
//     if ( !$gotsome ) {
//       $cache[$key] = '';
//       wp_cache_set( 'get_calendar' , $cache , 'calendar' );
//       return;
//     }
//   }
//
//   if ( isset( $_GET['w'] ) )
//     $w = '' . intval( $_GET['w'] );
//
//   // week_begins = 0 stands for Sunday
//   $week_begins = intval( get_option( 'start_of_week' ) );
//
//   // Let's figure out when we are
//   if ( !empty( $monthnum ) && !empty( $year ) ) {
//     $thismonth = '' . zeroise( intval( $monthnum ) , 2 );
//     $thisyear = ''.intval($year);
//   } elseif ( !empty( $w ) ) {
//     // We need to get the month from MySQL
//     $thisyear = '' . intval( substr( $m , 0 , 4 ) );
//     $d = ( ( $w - 1 ) * 7 ) + 6; //it seems MySQL's weeks disagree with PHP's
//     $thismonth = $wpdb->get_var( "SELECT DATE_FORMAT( ( DATE_ADD( '${thisyear}0101' , INTERVAL $d DAY ) ) , '%m' ) " );
//   } elseif ( !empty( $m ) ) {
//     $thisyear = '' . intval( substr( $m , 0 , 4 ) );
//     if ( strlen( $m ) < 6 )
//         $thismonth = '01';
//     else
//         $thismonth = '' . zeroise( intval( substr( $m , 4 , 2 ) ) , 2 );
//   } else {
//     $thisyear = gmdate( 'Y' , current_time( 'timestamp' ) );
//     $thismonth = gmdate( 'm' , current_time( 'timestamp' ) );
//   }
//
//   $unixmonth = mktime( 0 , 0 , 0 , $thismonth , 1 , $thisyear);
//
//   // Get the next and previous month and year with at least one post
//   $previous = $wpdb->get_row( "SELECT DISTINCT MONTH( post_date ) AS month , YEAR( post_date ) AS year
//     FROM $wpdb->posts
//     WHERE post_date < '$thisyear-$thismonth-01'
//     AND post_type IN ( $post_types ) AND post_status = 'publish'
//       ORDER BY post_date DESC
//       LIMIT 1" );
//   $next = $wpdb->get_row( "SELECT DISTINCT MONTH( post_date ) AS month, YEAR( post_date ) AS year
//     FROM $wpdb->posts
//     WHERE post_date > '$thisyear-$thismonth-01'
//     AND MONTH( post_date ) != MONTH( '$thisyear-$thismonth-01' )
//     AND post_type IN ( $post_types ) AND post_status = 'publish'
//       ORDER  BY post_date ASC
//       LIMIT 1" );
//
//   /* translators: Calendar caption: 1: month name, 2: 4-digit year */
//   $calendar_caption = _x( '%1$s %2$s' , 'calendar caption' );
//   $calendar_output = '<table id="wp-calendar" summary="' . esc_attr__( 'Calendar' ) . '">
//   <caption>' . sprintf( $calendar_caption , $wp_locale->get_month( $thismonth ) , date( 'Y' , $unixmonth ) ) . '</caption>
//   <thead>
//   <tr>';
//
//   $myweek = array();
//
//   for ( $wdcount = 0 ; $wdcount <= 6 ; $wdcount++ ) {
//     $myweek[] = $wp_locale->get_weekday( ( $wdcount + $week_begins ) % 7 );
//   }
//
//   foreach ( $myweek as $wd ) {
//     $day_name = ( true == $initial ) ? $wp_locale->get_weekday_initial( $wd ) : $wp_locale->get_weekday_abbrev( $wd );
//     $wd = esc_attr( $wd );
//     $calendar_output .= "\n\t\t<th scope=\"col\" title=\"$wd\">$day_name</th>";
//   }
//
//   $calendar_output .= '
//   </tr>
//   </thead>
//
//   <tfoot>
//   <tr>';
//
//   if ( $previous ) {    $calendar_output .= "\n\t\t" .
//       '<td colspan="3" id="prev"><a href="' . get_month_link( $previous->year , $previous->month ) .
//       '" title="' . sprintf( __( 'View posts for %1$s %2$s' ) ,
//       $wp_locale->get_month( $previous->month ) , date( 'Y' ,
//       mktime( 0 , 0 , 0 , $previous->month , 1 , $previous->year ) ) ) .
//       '">&laquo; ' . $wp_locale->get_month_abbrev( $wp_locale->get_month( $previous->month ) ) . '</a></td>';
//   } else {
//     $calendar_output .= "\n\t\t" . '<td colspan="3" id="prev" class="pad">&nbsp;</td>';
//   }
//
//   $calendar_output .= "\n\t\t" . '<td class="pad">&nbsp;</td>';
//
//   if ( $next ) {    $calendar_output .= "\n\t\t" . '<td colspan="3" id="next"><a href="' . get_month_link( $next->year , $next->month ) . '" title="' . esc_attr( sprintf( __( 'View posts for %1$s %2$s' ) , $wp_locale->get_month( $next->month ) , date( 'Y' , mktime( 0 , 0 , 0 , $next->month , 1 , $next->year ) ) ) ) . '">' . $wp_locale->get_month_abbrev( $wp_locale->get_month( $next->month ) ) . ' &r
// aquo;</a></td>';
//   } else {
//     $calendar_output .= "\n\t\t" . '<td colspan="3" id="next" class="pad">&nbsp;</td>';
//   }
//
//   $calendar_output .= '
//   </tr>
//   </tfoot>
//
//   <tbody>
//   <tr>';
//
//   // Get days with posts
//   $dayswithposts = $wpdb->get_results( "SELECT DISTINCT DAYOFMONTH( post_date )
//     FROM $wpdb->posts WHERE MONTH( post_date ) = '$thismonth'
//     AND YEAR( post_date ) = '$thisyear'
//     AND post_type IN ( $post_types ) AND post_status = 'publish'
//     AND post_date < '" . current_time( 'mysql' ) . '\'', ARRAY_N );
//   if ( $dayswithposts ) {
//     foreach ( (array) $dayswithposts as $daywith ) {
//       $daywithpost[] = $daywith[0];
//     }
//   } else {
//     $daywithpost = array();
//   }
//
//   if ( strpos( $_SERVER['HTTP_USER_AGENT'] , 'MSIE' ) !== false || stripos( $_SERVER['HTTP_USER_AGENT'] , 'camino' ) !== false || stripos( $_SERVER['HTTP_USER_AGENT'] , 'safari' ) !== false )
//     $ak_title_separator = "\n";
//   else
//     $ak_title_separator = ', ';
//
//   $ak_titles_for_day = array();
//   $ak_post_titles = $wpdb->get_results( "SELECT ID, post_title, DAYOFMONTH( post_date ) as dom "
//     . "FROM $wpdb->posts "
//     . "WHERE YEAR( post_date ) = '$thisyear' "
//     . "AND MONTH( post_date ) = '$thismonth' "
//     . "AND post_date < '" . current_time( 'mysql' ) . "' "
//     . "AND post_type IN ( $post_types ) AND post_status = 'publish'"
//   );
//   if ( $ak_post_titles ) {
//     foreach ( (array) $ak_post_titles as $ak_post_title ) {
//
//         $post_title = esc_attr( apply_filters( 'the_title' , $ak_post_title->post_title , $ak_post_title->ID ) );
//
//         if ( empty( $ak_titles_for_day['day_' . $ak_post_title->dom] ) )
//           $ak_titles_for_day['day_'.$ak_post_title->dom] = '';
//         if ( empty( $ak_titles_for_day["$ak_post_title->dom"] ) ) // first one
//           $ak_titles_for_day["$ak_post_title->dom"] = $post_title;
//         else
//           $ak_titles_for_day["$ak_post_title->dom"] .= $ak_title_separator . $post_title;
//     }
//   }
//
//   // See how much we should pad in the beginning
//   $pad = calendar_week_mod( date( 'w' , $unixmonth ) - $week_begins );
//   if ( 0 != $pad )
//     $calendar_output .= "\n\t\t" . '<td colspan="' . esc_attr( $pad ) . '" class="pad">&nbsp;</td>';
//
//   $daysinmonth = intval( date( 't' , $unixmonth ) );
//   for ( $day = 1 ; $day <= $daysinmonth ; ++$day ) {
//     if ( isset( $newrow ) && $newrow )
//       $calendar_output .= "\n\t</tr>\n\t<tr>\n\t\t";
//     $newrow = false;
//
//     if ( $day == gmdate( 'j' , current_time( 'timestamp' ) ) && $thismonth == gmdate( 'm' , current_time( 'timestamp' ) ) && $thisyear == gmdate( 'Y' , current_time( 'timestamp' ) ) )
//       $calendar_output .= '<td id="today">';
//     else
//       $calendar_output .= '<td>';
//
//     if ( in_array( $day , $daywithpost ) ) // any posts today?
//         $calendar_output .= '<a href="' . get_day_link( $thisyear , $thismonth , $day ) . "\" title=\"" . esc_attr( $ak_titles_for_day[$day] ) . "\">$day</a>";
//     else
//       $calendar_output .= $day;
//     $calendar_output .= '</td>';
//
//     if ( 6 == calendar_week_mod( date( 'w' , mktime( 0 , 0 , 0 , $thismonth , $day , $thisyear ) ) - $week_begins ) )
//       $newrow = true;
//   }
//
//   $pad = 7 - calendar_week_mod( date( 'w' , mktime( 0 , 0 , 0 , $thismonth , $day , $thisyear ) ) - $week_begins );
//   if ( $pad != 0 && $pad != 7 )
//     $calendar_output .= "\n\t\t" . '<td class="pad" colspan="' . esc_attr( $pad ) . '">&nbsp;</td>';
//
//   $calendar_output .= "\n\t</tr>\n\t</tbody>\n\t</table>";
//
//   $cache[$key] = $calendar_output;
//   wp_cache_set( 'get_calendar' , $cache, 'calendar' );
//
//   remove_filter( 'get_calendar' , 'ucc_get_calendar_filter' );
//   $output = apply_filters( 'get_calendar',  $calendar_output );
//   add_filter( 'get_calendar' , 'ucc_get_calendar_filter' );
//
//   if ( $echo )
//     echo $output;
//   else
//     return $output;
// }
//
// function ucc_get_calendar_filter( $content ) {
//   $output = ucc_get_calendar( '' , '' , false );
//   return $output;
// }
// add_filter( 'get_calendar' , 'ucc_get_calendar_filter' , 10 , 2 );


/*
==========================================
// NOTE: Options page
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
