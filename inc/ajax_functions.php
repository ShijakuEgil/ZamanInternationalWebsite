<?php


add_action( 'wp_ajax_nopriv_zaman_get_events_at_month', 'zaman_get_events_at_month');
add_action( 'wp_ajax_zaman_get_events_at_month', 'zaman_get_events_at_month');
add_action( 'wp_ajax_nopriv_zaman_reset_upcoming_events', 'zaman_reset_upcoming_events');
add_action( 'wp_ajax_zaman_reset_upcoming_events', 'zaman_reset_upcoming_events');

function zaman_get_events_at_month(){
    $the_month = $_POST['month'];
    $currDate = strtotime(date( 'Y-m-d' ));
    $query = new WP_Query( array(
        'posts_per_page' => -1,
        'post_type' => 'event',
        'orderby' => 'meta_value',
        'meta_key' => 'date',
        'order' => 'ASC'
    )
);

    if( $query->have_posts()):
        $response = '';
        while($query->have_posts()): $query->the_post();

            $calDate = strtotime( date ( get_field( 'date' ) ) );

            $postMonth = date('M', $calDate);

            if($calDate >= $currDate && $postMonth == $the_month):
                get_template_part('templates/content', 'calendar');
            endif;

        endwhile;
        wp_reset_postdata();
    endif;
    die();
}

function zaman_reset_upcoming_events(){
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
           }
       endwhile;
   // endif;
   wp_reset_postdata();

    die();
}
