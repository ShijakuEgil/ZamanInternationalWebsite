<article id="post-<?php the_ID(); ?>" <?php post_class('banner-wrapper container-fluid'); ?>>
  <?php $src =
  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
  <div class="row no-gutters container-fluid banner-image" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
    <div class="col-9 banner-title-header">
        <h1 class="banner-title">Zaman |<strong> <?php wp_title('');?></strong></h1>
    </div>
  <?php if(get_post()->post_content != ''): ?>
    <div class="col-3 banner-info-wrapper">
      <i class="fa fa-quote-left"></i>
      <?php while(have_posts()) : the_post(); ?>
        <div class="banner-info">
              <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
      <i class="fa fa-quote-right"></i>
    </div>
  <?php endif; ?>
  </div>
</article>
