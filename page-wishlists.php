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
 <!-- <div class="container-fluid"> -->

   <div class="container-fluid wishlists-body-wrapper">
       <?php
       $args = array(
            'post_type'    =>   'wish-list',
            'post_per_page'=>   -1
       );

       $query = new WP_Query( $args );?>
       <div id="masonry" class="wishlist-row-wrapper">
       <?php
       while( $query->have_posts()): $query->the_post(); ?>

            <div class="wishlist-single-wrapper text-center ">
                 <div class="wishlist-content-wrapper py-5">
                    <div class="wishlist-icon-wrapper display-1 mb-5"><?php the_field('wishlist_icon'); ?></div>
                    <div class="wishlist-title-wrapper display-4 mb-3"><?php the_field('department_name'); ?></div>
                    <div class="wishlist-description-wrapper container-fluid lead"><?php the_field('wish_list'); ?></div>
                    <a href="<?php the_field('button_url'); ?>" class="btn btn-lg btn-outline-primary" name="button">Donate</a>
                </div>
            </div>
       <?php
       endwhile;
       ?>
       </div>

   </div>

<!-- </div> -->
 <?php
 get_footer( ); ?>
