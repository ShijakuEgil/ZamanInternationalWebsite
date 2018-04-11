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
          'post_type'    =>   'whish-list',
          'post_per_page'=>   -1
     );

     $query = new WP_Query( $args );?>
     <div class="container-fluid row no-gutters wishlist-row-wrapper">

     <?php
     while($query->have_posts()): $query->the_post();?>

          <div class="col-4 wishlist-col-wrapper" data-toggle="popover" title="Popover title"
               data-content="And here's some amazing content. It's very engaging. Right?">
          </div>

     <?php
     endwhile;
     ?>
     </div>
 </div>

 <?php
 get_footer( ); ?>
