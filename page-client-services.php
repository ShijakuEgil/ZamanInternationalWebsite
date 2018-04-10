<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>

 <div class="humanity-wrapper container-fluid">
   <div class="row no gutters humanity-row">
     <?php
     $args = array(
       'post_per_page' => -1,
       'post_type' => 'hope-4-humanity',
     );

     $query = new WP_Query($args);
     while($query->have_posts() ) : $query->the_post();
       get_template_part('templates/content', 'humanity-project');
     endwhile;?>

   </div>

   <div class="btn-group" role="group" aria-label="Basic example">
     <button type="button" class="btn btn-secondary">Donate Goods</button>
     <button type="button" class="btn btn-secondary">Donate Funds</button>
     <button type="button" class="btn btn-secondary">Wishlist</button>
     <button type="button" class="btn btn-secondary">Volunteer</button>
   </div>

 </div>

 <?php get_footer() ?>
