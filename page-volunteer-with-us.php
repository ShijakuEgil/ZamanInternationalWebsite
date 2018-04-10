<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>

</div>
  <div class="content impact-boxes row">
         <img src="<?php echo get_template_directory_uri();?>/img/stock member.jpeg" style="height:50%;" class="left col-lg-6"/>
         <p class="col-lg-6">
           <i class="fa fa-quote-left"></i>
         Lorem Ipsum is simply dummy text of the printing and typesetting industry.
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
         when an unknown printer took a galley of type and scrambled it to make a type
         specimen book. It has survived not only five centuries, but also the leap into
         electronic typesetting, remaining essentially unchanged. It was popularised in the
         1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
         recently with desktop publishing software like Aldus PageMaker including versions of
         Lorem Ipsum.
         <i class="fa fa-quote-right"></i>
         </p>
 </div>

<!-- the title should say "VOLUNTEER OPPORTUNITIES" -->
<?php zaman_area_title('what_we_do_title', 'what_we_do_subtitle', 'page_on_front'); ?>
<div class="row no-gutters container-fluid featured-contents impact-boxes">
 <!-- <div class="col-4 single-post"> -->
<?php
      $args = array(
        'post_type' => 'event',
        'posts_per_page' => 3
      );

        $event_query = new WP_Query($args);
        // $check = true;
        if($event_query->have_posts() ):
            // $currDate = new DateTime(current_time( 'Y-m-d H:i' ));
            while($event_query->have_posts() ) : $event_query->the_post();
                  // $calDate = new DateTime(get_field( 'time_date' ));
                    // if($calDate >= $currDate){
                 get_template_part( 'templates/content', 'featured' );
                      // $check = false;
                      // }
            endwhile;
        endif;
        wp_reset_postdata();
  ?>

<div class="mt-5 col-md-12"> </div>

<div class="content impact-boxes row">
       <img src="<?php echo get_template_directory_uri();?>/img/stock member.jpeg" style="height:90%;" class="left col-lg-6"/>
       <p class="col-lg-6">
         <i class="fa fa-quote-left"></i>
       Lorem Ipsum is simply dummy text of the printing and typesetting industry.
       Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
       when an unknown printer took a galley of type and scrambled it to make a type
       specimen book.
       <i class="fa fa-quote-right"></i>
       </p>
</div>

</div>

 <?php get_footer() ?>
