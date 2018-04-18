<?php
/*
Template Name: Elementor Page(Banner & Title)
Template Post Type: page
*/
get_header();
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title');
while ( have_posts() ): the_post();

    the_content();

endwhile;
get_footer();
 ?>
