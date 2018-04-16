<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
  <?php
  $post_id = get_the_ID();
  $current_post_type = get_post_type($post_id);

  $args = array(
                    'post_type' => $current_post_type,
                    'posts_per_page' => 5,
                    'orderby' => 'meta_value',
                    'meta_key' => 'date',
                    'order' => 'ASC'

                  );

  $query = new WP_Query( $args );
  $currDate = strtotime( date( 'Y-m-d' ) );
  if($query->have_posts() ) : ?>
  <h1 class="text-center text-info related-posts-banner">Upcoming Events</h1>
  <hr />
  <?php while( $query->have_posts() ): $query->the_post();?>
      <?php $calDate = strtotime( date ( get_field( 'date' )));?>
            <?php if($calDate >= $currDate):?>
                <div class="row container-fluid single-ui-related-posts">
                  <h1 class="col-8 related-post-title"> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h1>
                  <div class="col-4 related-post-img" style="background-image: url('<?php echo zaman_get_featured_image(); ?>')"></div>
                </div>
            <?php endif; ?>
  <?php endwhile; ?>
<?php endif;
wp_reset_postdata();?>
</article>
