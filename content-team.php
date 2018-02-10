<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a class="member-link" href="#">
    <div class="member-container">
      <?php $src =
      wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
      <div class="image-container" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
        <div class="color">      
        </div>
      </div>
      <div class="info-container">
        <h4 class="name"><?php the_title(); ?></h4>
        <small class="email">eshijaku@umich.edu</small>
      </div>
    </div>
  </a>
</article>
