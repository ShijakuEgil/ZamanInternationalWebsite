<?php
/*
     @authors Egil Shijaku, Samia Chahine
     @pacakge ZamanInternational.org

     Zaman Wishlists Page
*/
get_header();
get_template_part( 'templates/content', 'banner' );
get_template_part('templates/content', 'page-title');
 ?>
 <div class="container-fluid wishlists-body-wrapper">
     <?php
     $args = array(
          'post_type'    =>   'wish-list',
          'post_per_page'=>   -1
     );

     $query = new WP_Query( $args );?>
     <div class="container-fluid row no-gutters wishlist-row-wrapper my-5">

     <?php
     while( $query->have_posts()): $query->the_post(); ?>

          <div class="col-3 wishlist-col-wrapper text-center p-2" data-toggle="popover" title="Popover title"
               data-content="And here's some amazing content. It's very engaging. Right?">
               <div class="whishlist-content-wrapper">
                  <div class="wishlist-icon-wrapper display-1"><?php the_field('wishlist_icon'); ?></div>
                  <div class="wishlist-title-wrapper display-4"><?php the_field('department_name'); ?></div>
                  <div class="wishlist-description-wrapper container-fluid lead"><?php the_field('wish_list'); ?></div>
              </div>
          </div>
     <?php
     endwhile;
     ?>
     </div>
 </div>

 <?php
 get_footer( ); ?>
