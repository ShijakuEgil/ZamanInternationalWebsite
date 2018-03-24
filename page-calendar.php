<?php get_header();
      get_template_part( 'templates/content', 'banner' );
?>
 <!--title-component-->
 <div class="container-fluid title-conponent">
   <div class="row title-row justify-content-center">
     <div class="col separator"></div>
     <div class="col-auto title">
       <h1>UPCOMING EVENTS</h1>
     </div>
     <div class="col separator"></div>
   </div>
   <p class="description">
     Nunc luctus in metus eget fringilla.
     Aliquam sed justo ligula. Vestibulum nibh erat,
     pellentesque ut laoreet vitae.
 </div>
 <!--title-component end-->
 <div class="row no-gutters container-fluid calendar-main-container">
   <div class="col-3 calendar-left-container">
     <div class="background">
       <h1 class="past-events-title">PAST EVENTS</h1>
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
            // var_dump($currDate);
            while($query->have_posts() ) : $query->the_post();
               $calDate =strtotime(date(get_field( 'date' )));
               // var_dump($calDate);

               // following var dumps are used for testing the time functions
               //var_dump($calDate == $currDate);
               //var_dump($calDate > $currDate);
               //var_dump($calDate < $currDate);

               // check if date is older than current or not
               if($calDate < $currDate){
                 get_template_part('templates/content', 'pastEvent');
               }
             endwhile;
             wp_reset_postdata();
       ?>
     </div>
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
   <div class="col-3 calendar-right-container">
     <div class="background">
       <?php get_sidebar('event'); ?>
           <a href="#" class="btn btn-success">Volunteer</a> <br />
           <a href="#" class="btn btn-warning">Donate</a>
     </div>
   </div>
 </div>
<?php get_footer(); ?>
