<?php
get_header();
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>
 <div class="container-fluid volunteer-body-wrapper">

     <div class="container volunteer-quote-wrapper row no-gutters">
         <i class="volunteer-quote-l fa fa-quote-left text-primary"></i>
         <i class="volunteer-quote-r fa fa-quote-right float-right text-primary"></i>
	    <div  class="col-6 volunteer-quote-image"
            style="background-image: url('<?php the_field( 'quote_image', get_id_by_slug('volunteer-with-us') ); ?>')" >
        </div>
        <div class="col-6 volunteer-quote-text-wrapper">

            <p class="description lead text-justify"><?php the_field('quote_text', get_id_by_slug('volunteer-with-us')); ?></p>

        </div>
     </div>

 </div>

<!-- the title should say "VOLUNTEER OPPORTUNITIES" -->
<?php zaman_area_title('opportunities_title', 'opportunities_subtitle', 'pages_for_posts'); ?>

<div class="row no-gutters container-fluid volunteer-opts-wrapper">
    <?php
          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'volunteer_opts'
          );

            $query = new WP_Query($args);
            // if($event_query->have_posts() ):
                while($query->have_posts() ): $query->the_post();?>

                    <?php get_template_part( 'templates/content', 'volunteer-opts'); ?>

                <?php endwhile;
            // endif;
            wp_reset_postdata();
      ?>
</div>
<?php zaman_area_title('testimonials_title', 'testimonials_subtitle', 'pages_for_posts'); ?>

<div class="row no-gutters container-fluid volunteer-opts-wrapper">
    <?php
          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'testimonials'
          );

            $query = new WP_Query($args);
            // if($event_query->have_posts() ):
                while($query->have_posts() ): $query->the_post();?>

                    <?php get_template_part( 'templates/content', 'testimonials'); ?>

                <?php endwhile;
            // endif;
            wp_reset_postdata();
      ?>
</div>

 <?php get_footer() ?>
