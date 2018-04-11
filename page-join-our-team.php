<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>

 <div class="row title-row justify-content-center impact-boxes container-fluid">
     <div class="col-6 calendar-center-container">

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

          if($calDate >= $currDate){ ?>
            <div class="float-left">
            <?php get_template_part('templates/content', 'calendar'); ?>
            </div>
        <?php  }
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
        <div class="col-6 container-fluid d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-primary">Apply</button>
        </div>

</div>

 <?php get_footer() ?>
