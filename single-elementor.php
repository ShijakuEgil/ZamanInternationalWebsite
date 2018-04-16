<?php
/*
 * Template Name: Elementor Single Page
 * Template Post Type: job_openings, event
 */
 ?>
 <?php get_header(); ?>
 <?php get_template_part('templates/content', 'single-banner'); ?>
 <?php if ( have_posts() ):?>

   <?php while ( have_posts() ): the_post(); ?>
       <div class="container">
           <?php the_content(); ?>
       </div>
   <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
