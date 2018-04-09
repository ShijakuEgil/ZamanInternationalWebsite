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
               <div class="wishlist-image-wrapper" style="background-image: url('<?php echo zaman_get_featured_image();?>')">

                    <p class="h2 wishlist-title-wrapper"><?php the_field('department_name'); ?></p>

               </div>

          </div>

     <?php
     endwhile;
     ?>
     </div>
 </div>

 <?php
 get_footer( ); ?>
