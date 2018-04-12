<?php get_header();
      get_template_part( 'templates/content', 'banner' );
      get_template_part( 'templates/content', 'page-title');
?>
 <div class="row no-gutters container-fluid calendar-main-container">
   <div class="col-3 calendar-past-event-wrapper">
     <!-- <div class="calendar-past-background"> -->
       <h1 class="past-events-title text-center">PAST EVENTS</h1>
       <?php
            $currDate = strtotime(date( 'Y-m-d' ));
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'event',
                'orderby' => 'meta_value',
                'meta_key' => 'date',
                'order' => 'ASC'
            );

            // TODO: fix the post per page problem

            $query = new WP_Query($args);

            while($query->have_posts() ) : $query->the_post();
               $calDate =strtotime(date(get_field( 'date' )));


               // check if date is older than current or not
               if($calDate < $currDate){
                 get_template_part('templates/content', 'past-event');
               }
             endwhile;
             wp_reset_postdata();
       ?>
     <!-- </div> -->
   </div>
   <div class="col-6 calendar-center-container ">
<?php
     $args = array(
                   'posts_per_page' => -1,
                   'post_type' => 'event',
                   'orderby' => 'meta_value',
                   'meta_key' => 'date',
                   'order' => 'ASC'
     );

     // TODO: fix the post per page problem

     $query = new WP_Query($args);
     $currDate = strtotime(date( 'Y-m-d' ));
     // var_dump($currDate);
     while($query->have_posts() ) : $query->the_post();
        $calDate = strtotime(date(get_field( 'date' )));
        // var_dump($calDate);
        // check if date is older than current or not
        if($calDate >= $currDate){
          get_template_part('templates/content', 'calendar');
        }
      endwhile;
      wp_reset_postdata();
?>
   </div>
   <div class="col-3 calendar-sidebar-container">
       <?php dynamic_sidebar('sidebar-calendar'); ?>
   </div>
 </div>
<?php get_footer(); ?>
