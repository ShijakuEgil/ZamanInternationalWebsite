<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
  <?php
  $post_id = get_the_ID();
  $cat_ids = array();
  $categories = get_the_category( $post_id );

  if ( $categories && !is_wp_error( $categories ) ) {

      foreach ( $categories as $category ) {

          array_push( $cat_ids, $category->term_id );

      }
  }
  $current_post_type = get_post_type($post_id);

  $args = array(    'category__in' => $cat_ids,
                    'post_type' => $current_post_type,
                    'posts_per_page' => '5',
                    'post__not_in' => array( $post_id )
                  );

  $query = new WP_Query( $args );

  if($query->have_posts() ) : ?>
  <h1 class="text-center text-info related-posts-banner">Related Posts</h1>
  <hr />
  <?php while( $query->have_posts() ): $query->the_post();?>
    <div class="row container-fluid single-ui-related-posts">
      <h1 class="col-8 related-post-title"> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h1>
      <div class="col-4 related-post-img" style="background-image: url('<?php echo zaman_get_featured_image(); ?>')"></div>
    </div>

  <?php endwhile; ?>
<?php endif;
wp_reset_postdata();?>
</article>
