<article id="post-<?php the_ID(); ?>" class="col-4 single-post">
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
  <div class="post-image rounded" style="background-image:url('<?php echo zaman_get_featured_image(); ?>')">
    <div class="post-header">
      <a class="featured-post-type" href="<?php echo get_permalink( get_page_by_title( $page_title) );?>">Zaman<strong> | <?php echo $post_type; ?></strong></a>
    </div>
  </div>
  <div class="post-content d-flex flex-column">
    <div class="featured-content align-self-start">
        <?php the_title( sprintf('<h2 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
        <?php echo acf_excerpt( 'text' ); ?>
    </div>
    <div class="button-wrapper w-100 text-right px-5">
        <a class="featured-content-btn btn btn-outline-primary"href="<?php echo get_permalink(); ?>">Read More »</a>
    </div>

  </div>
</article>
