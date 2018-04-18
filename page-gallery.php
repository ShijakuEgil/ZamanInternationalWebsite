<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title');
 ?>
 <div class="gallery-body-wrapper container-fluid">

   <div class="row gallery-row-wrapper no gutters container-fluid">

     <?php
     $args = array(
       'post_type'  =>  'gallery-photo',
       'post_per_page'  =>  -1
     );
     $query = new WP_Query($args);

     while($query->have_posts()): $query->the_post();?>
        <div class="col-3 gallery-album-wrapper text-center">

            <div class="gallery-album-cover rounded" style="background-image: url('<?php echo zaman_get_featured_image();?>')"></div>

            <a class="gallery-album-title d-flex justify-content-center align-items-center"href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

        </div>
     <?php
   endwhile;
   ?>
    </div><!--row-wrapper-->

</div><!--boddy-wrapper-->

<?php get_footer(); ?>
