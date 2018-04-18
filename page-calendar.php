<?php get_header();
      get_template_part( 'templates/content', 'banner' );
      get_template_part( 'templates/content', 'page-title');

      $jan = 0;
      $feb = 0;
      $mar = 0;
      $apr = 0;
      $may = 0;
      $jun = 0;
      $jul = 0;
      $aug = 0;
      $sep = 0;
      $oct = 0;
      $nov = 0;
      $dec = 0;
?>
 <div class="row no-gutters container-fluid calendar-main-container">

   <div class="col-3 calendar-past-event-wrapper">

       <h1 class="past-events-title text-center text-uppercase"><?php the_field( 'past_events_title', get_id_by_slug( 'calendar' ) );?></h1>
       <?php
           $args = array(
               'posts_per_page' => -1,
               'post_type' => 'event',
               'orderby' => 'meta_value',
               'meta_key' => 'date'
           );
            $past_query = new WP_Query($args);
            $k = 0;
            $past_event_limit = 10;
            $currDate = strtotime( date( 'Y-m-d' ) );


            while($past_query->have_posts() ) : $past_query->the_post();

                $calDate =strtotime(date(get_field( 'date' )));

                // check if date is older than current or not
                if($calDate < $currDate)
                {
                    if( $k == $past_event_limit): break; endif;

                    get_template_part('templates/content', 'past-event');

                    $k++;
                }
                else
                {// NOTE: we get all the upcoming events and add them to monthly variables
                    $month = date('M', $calDate);
                    switch( $month )
                    {
                      case 'Jan':   $jan++;     break;
                      case 'Feb':   $feb++;     break;
                      case 'Mar':   $mar++;     break;
                      case 'Apr':   $apr++;     break;
                      case 'May':   $may++;     break;
                      case 'Jun':   $jun++;     break;
                      case 'Jul':   $jul++;     break;
                      case 'Aug':   $aug++;     break;
                      case 'Sep':   $sep++;     break;
                      case 'Oct':   $oct++;     break;
                      case 'Nov':   $nov++;     break;
                      case 'Dec':   $dec++;     break;
                    }
                }
            endwhile;
            wp_reset_postdata();
       ?>
   </div>

   <div class="col-6 calendar-center-container ">
<?php
     $curr_args = array(
                   'posts_per_page' => -1,
                   'post_type' => 'event',
                   'orderby' => 'meta_value',
                   'meta_key' => 'date',
                   'order' => 'ASC'
    );
    $query = new WP_Query($curr_args);

    $j = 0;
    $curr_event_limit = get_field( 'upcoming_events_amount', get_id_by_slug( 'calendar' ) );

    $currDate = strtotime( date( 'Y-m-d' ) );

    while( $query->have_posts() ) : $query->the_post();

        $calDate = strtotime(date(get_field( 'date' )));

            // check if date is older than current or not
        if($calDate >= $currDate){
            if($j == $curr_event_limit): break; endif; // TODO: needs to be fixed with wordpress logic for only outputing 5 comments
                get_template_part('templates/content', 'calendar');
                $j++;
        ?>
        <hr>
<?php
        }
    endwhile;
    wp_reset_postdata();
?>
   </div>

   <div class="col-3 calendar-upcomming-container text-center">

       <h1 class="text-center text-uppercase"><?php the_field( 'calendar_of_events_title', get_id_by_slug( 'calendar' ) ); ?></h1>

       <div class="calendar-month-view row container-fluid no-gutters">

           <div class="calendar-month-wrapper jan col-4" data-month="Jan"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">JANUARY</p>
               <?php if($jan != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $jan ?>  <?php if($jan > 1): echo 'events'; else: echo 'event'; endif; ?></p>
              <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper feb col-4" data-month="Feb"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">FEBRUARY</p>
               <?php if($feb != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $feb ?> <?php if($feb > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper mar col-4" data-month="Mar"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">MARCH</p>
               <?php if($mar != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $mar ?> <?php if($mar > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper apr col-4" data-month="Apr"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">APRIL</p>
                    <?php if($apr != 0): ?>
               <p class="lead text-center text-primary"> <?php echo $apr ?> <?php if($apr > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper may col-4" data-month="May"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">MAY</p>
               <?php if($may != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $may ?> <?php if($may > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper jun col-4" data-month="Jun"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">JUNE</p>
               <?php if($jun != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $jun ?> <?php if($jun > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper jul col-4" data-month="Jul"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">JULY</p>
               <?php if($jul != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $jul ?> <?php if($jul > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper aug col-4" data-month="Aug"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">AUGUST</p>
               <?php if($aug != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $aug ?> <?php if($aug > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper sep col-4" data-month="Sep"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">SEPTEMBER</p>
               <?php if($sep != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $sep ?> <?php if($sep > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper oct col-4" data-month="Oct"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">OCTOBER</p>
               <?php if($oct!= 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $oct ?> <?php if($oct > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper nov col-4" data-month="Nov"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">NOVEMBER</p>
               <?php if($nov != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $nov ?> <?php if($nov > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

           <div class="calendar-month-wrapper dec col-4" data-month="Dec"  data-url="<?php echo admin_url('admin-ajax.php'); ?>">
               <p class="lead calendar-month">DECEMBER</p>
               <?php if($dec != 0): ?>
                   <p class="lead text-center text-primary"> <?php echo $dec ?> <?php if($dec > 1): echo 'events'; else: echo 'event'; endif; ?></p>
               <?php endif; ?>
           </div>

       </div>

       <button
            type="button"
            class="calendar-reset-btn btn btn-dark my-5 w-75"
            name="button"
            data-url="<?php echo admin_url('admin-ajax.php'); ?>">
            Reset
        </button>
       <h1 class="text-center text-uppercase mt-5"><?php the_field( 'get_involved_area_title', get_id_by_slug( 'calendar' ) ); ?></h1>
       <div class="calendar-btn-group btn-group-vertical w-75" role="group" aria-label="Basic example">
         <button onclick="window.location='<?php the_field('top_button_page_link', get_id_by_slug( 'calendar' ) ); ?>';" type="button" class="btn btn-lg btn-dark"><?php the_field( 'top_button_text', get_id_by_slug( 'calendar') ); ?></button>
         <button onclick="window.location='<?php the_field('middle_button_page_link', get_id_by_slug( 'calendar' ) ); ?>';" type="button" class="btn btn-lg btn-dark"><?php the_field( 'middle_button_text', get_id_by_slug( 'calendar') ); ?></button>
         <button onclick="window.location='<?php the_field('bottom_button_page_link', get_id_by_slug( 'calendar' ) ); ?>';" type="button" class="btn btn-lg btn-dark"><?php the_field( 'bottom_button_text', get_id_by_slug( 'calendar') ); ?></button>

       </div>
   </div>
 </div>
<?php get_footer(); ?>
