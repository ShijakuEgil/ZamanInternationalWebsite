<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>
<div class="container-fluid">
  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
  <?php
  $args = array(
    'post_type' => 'boost-post',
    'post_per_page' => -1
  );

  $query = new WP_Query($args);


  while($query->have_posts()):$query->the_post();?>

  <a class="nav-item nav-link active"  data-toggle="tab" href="#team-modal-<?php the_ID();?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php the_title(); ?></a>
  <?php endwhile;
  ?>


  </div>
</nav>
  <div class="tab-content" id="nav-tabContent">
<?php

      while($query->have_posts()):$query->the_post();?>

    <div class="tab-pane fade show active" id="team-modal-<?php the_ID();?>" role="tabpanel" aria-labelledby="nav-home-tab">
      <?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
      ?>
      <div class="tab-image h-100" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
      </div>
    </div>
      <?php endwhile; ?>
    </div>
</div>


<?php get_footer() ?>
