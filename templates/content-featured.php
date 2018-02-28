<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php $post_type = get_post_type( );
  if($post_type == 'event'):?>
    <h1><?php echo 'Events'; ?></h1>
  <?php
  elseif($post_type == 'news'):?>
    <h1><?php echo 'News'; ?></h1>
  <?php
  elseif($post_type == 'blog-post'):?>
    <h1><?php echo 'Blog'; ?></h1>
  <?php
  endif;?>
  <?php $src =
  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
  <div class="post-image" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
    <!-- <a href="#">
        <?php //the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
    </a> -->
  </div>
  <div class="post-content">
    <div class="post-header">
      <img class"img-responsive" src="<?php echo get_template_directory_uri();?>/img/logo-hope.png" alt="">

    </div>
        <?php the_title( sprintf('<h2 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
        <?php the_excerpt(); ?>
    <a class="transparent-bg-btn medium-btn"href="<?php echo get_permalink(); ?>">Read More</a>
  </div>
</article>
