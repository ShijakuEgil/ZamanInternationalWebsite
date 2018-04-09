<?php get_header( ); ?>
    <?php get_template_part( 'templates/content', 'banner' ); ?>
    <?php get_template_part( 'templates/content', 'page-title' ); ?>

    <section class="timeline">
      <div class="container-fluid second">
<?php
      $args = array(
        'post_type' => 'history-timeline',
        'post_per_page' => -1,
      );

      $timeline_query = new WP_Query($args);
      $k = 1;
      while($timeline_query->have_posts()):$timeline_query->the_post();
 ?>
    <div class="timeline-item">

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
      <div class="timeline-img">
      <div class="date"><?php echo date('M d Y', strtotime(get_field('timeline_date'))); ?></div>
    </div>
      <div class="timeline-divider">

      </div>
      <div class="timeline-content timeline-card <?php if ($k % 2 == 0): echo 'js--fadeInRight'; else: echo'js--fadeInLeft'; endif;?>" >
        <div class="timeline-img-header" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
          <h2 class="timeline-title"><?php the_field('timeline_title') ?></h2>
        </div>
        <div class="timeline-paragraph">
                  <?php the_field('timeline_description')?>
        </div>
      </div>
    </div>
 <?php
      $k++;
      endwhile;
?>
      </div>
    </section>
    <div class="end-note-container container-fluid">

      <?php // TODO: link to volunteer page ?>
      <a href="#" class="btn btn-lg timeline-end-note" >Be Part <br/>of <br/>Our Story!</a>
    </div>

<?php get_footer( ); ?>
