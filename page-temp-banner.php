<?php
/*
Template Name: Elementor Page (Banner  Only)
Template Post Type: page
*/
get_header();
get_template_part( 'templates/content', 'banner' );
while ( have_posts() ): the_post();

div class="elementor-div container-fluid m-0 p-0">

    <?php the_content(); ?>

</div>

endwhile;

get_footer();
 ?>
