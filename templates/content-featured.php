<article id="post-<?php the_ID(); ?>" class="col-4 single-post"<?php //post_class(); ?>>
  <?php $post_type = get_post_type( );
  if($post_type == 'event'):?>
    <?php $post_type = 'Events';
    $page_title = 'Calendar'; ?>

  <?php
  elseif($post_type == 'news'):?>
    <?php $post_type = 'News';
    $page_title = 'News';?>
  <?php
  elseif($post_type == 'blog-post'):?>
    <?php $post_type = 'Blog';
    $page_title = 'Blog';?>
  <?php
  endif;?>


  <!-- <div class="post-image" style="background-image:url('<?php //echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"> -->
  <div class="post-image" style="background-image:url('<?php echo zaman_get_featured_image()?>')">
    <div class="post-header">

      <a class="featured-post-type" href="<?php echo get_permalink( get_page_by_title( $page_title) );?>">Zaman<strong> | <?php echo $post_type; ?></strong></a>

    </div>
  </div>
  <div class="post-content">

    <div class="featured-content">
        <?php the_title( sprintf('<h2 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
        <?php the_excerpt(); ?>
    </div>
    <a class="featured-content-btn btn btn-outline-primary"href="<?php echo get_permalink(); ?>">Read More »</a>
  </div>
</article>
