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

 <!-- the title should say "MAKE AN IMPACT" -->
 <?php zaman_area_title('what_we_do_title', 'what_we_do_subtitle', 'page_on_front'); ?>
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
 </div>

 <div class="partner-slider impact-boxes row">
   <h1>Carousel goes here</h1>
 </div>

 <div class="btn-group" role="group" aria-label="Basic example">
   <button type="button" class="btn btn-secondary">Donate Goods</button>
   <button type="button" class="btn btn-secondary">Donate Funds</button>
   <button type="button" class="btn btn-secondary">Wishlist</button>
   <button type="button" class="btn btn-secondary">Volunteer</button>
 </div>

 <?php get_footer() ?>
