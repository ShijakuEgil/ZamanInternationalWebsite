<?php
/*
Template Name: Elementor Page (Title  Only)
Template Post Type: page
*/
get_header();

while ( have_posts() ): the_post();?>

<div class="elementor-div container-fluid m-0 p-0">
    <?php get_template_part( 'templates/content', 'page-title' ); ?>
    <?php the_content(); ?>

</div>
<?php
endwhile;

get_footer();
 ?>
