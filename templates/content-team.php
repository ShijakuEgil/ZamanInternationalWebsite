<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="member-link">
      <?php $src =
      wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
      <div class="image-container container-fluid" style="background-image:url('<?php echo esc_url( $src[0] ); ?>')">
        <div class="color">
          <a href="#team-modal-<?php the_ID();?>" class="spin" data-toggle="modal" data-target="">
            <i class="fa fa-external-link-square"></i>
          </a>
        </div>
      </div>
      <div class="info-container container-fluid">
        <h3 class="name"><?php the_title(); ?></h4>
        <h5 class="job-title"><?php the_field('job_title'); ?></h5>
      </div>
  </div>
</article>
