<?php
require get_template_directory() .'/inc/enqueue.php';
require get_template_directory() .'/inc/post_types.php';
require get_template_directory() .'/inc/custom_fields.php';
require get_template_directory() .'/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() .'/inc/theme_support_functions.php';
require get_template_directory() .'/inc/custom_functions.php';
require get_template_directory() .'/inc/ajax_functions.php';

// /**
//  * Filter the upload size limit for non-administrators.
//  *
//  * @param string $size Upload size limit (in bytes).
//  * @return int (maybe) Filtered size limit.
//  */
// function filter_site_upload_size_limit( $size ) {
//     // Set the upload size limit to 60 MB for users lacking the 'manage_options' capability.
//     if ( ! current_user_can( 'manage_options' ) ) {
//         // 60 MB.
//         $size = 6024 * 10000;
//     }
//     return $size;
// }
// add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 20 );
// add_action('acf/input/admin_head', 'my_acf_admin_head');
