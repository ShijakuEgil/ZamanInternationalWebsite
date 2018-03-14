<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php $post_type = get_post_type( );

  if($post_type == 'event'):?>
    <?php $post_type = 'Events'; ?>
  <?php
  elseif($post_type == 'news'):?>
    <?php $post_type = 'News'; ?>
  <?php
  elseif($post_type == 'blog-post'):?>
    <?php $post_type = 'Blog'; ?>
  <?php
  endif;?>
  <?php $src =
  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
  <div class="post-image" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
    <div class="post-header">
      <!-- <img class="featured-content-logo" src="<?php //echo get_template_directory_uri();?>/img/logo-hope.png" alt=""></img> -->
      <a class="featured-post-type" href="#">Zaman <strong>| <?php echo $post_type; ?></strong></a>
    </div>
  </div>
  <div class="post-content">

    <div class="featured-content">
        <?php the_title( sprintf('<h2 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
        <?php the_excerpt(); ?>
    </div>
    <a class="transparent-bg-btn medium-btn"href="<?php echo get_permalink(); ?>">Read More</a>
  </div>
</article>
