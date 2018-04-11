<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="member-link">
      <div class="image-container container-fluid" style="background-image:url('<?php echo zaman_get_featured_image(); ?>')">
        <div class="color">
          <a href="#team-modal-<?php the_ID();?>" class="spin" data-toggle="modal" data-target="">
            <i class="fa fa-external-link-square"></i>
          </a>
        </div>
      </div>
      <div class="info-container container-fluid">
        <h3 class="name"><?php the_field('member_name');?></h3>
        <h5 class="job-title"> <?php the_field('member_position_title'); ?> </h5>
      </div>
  </div>
</article>
