<?php get_header( ); ?>
    <?php get_template_part( 'templates/content', 'banner' ) ?>
    <!--title-component-->
    <div class="container-fluid title-conponent">
      <div class="row title-row justify-content-center">
        <div class="col separator"></div>
        <div class="col-auto title">
          <h1>OUR HISTORY</h1>
        </div>
        <div class="col separator"></div>
      </div>
      <p class="description">
        Nunc luctus in metus eget fringilla.
        Aliquam sed justo ligula. Vestibulum nibh erat,
        pellentesque ut laoreet vitae.
    </div>
    <!--title-component end-->

    <section class="timeline">
      <div class="container-fluid second">
<?php
      $args = array(
        'post_type' => 'timeline',
        'post_per_page' => -1,
      );

      $timeline_query = new WP_Query($args);
      $k = 1;
      while($timeline_query->have_posts()):$timeline_query->the_post();
 ?>
    <div class="timeline-item">

<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
      <div class="timeline-img"></div>
      <div class="timeline-content timeline-card <?php if ($k % 2 == 0): echo 'js--fadeInRight'; else: echo'js--fadeInLeft'; endif;?>" >
        <div class="timeline-img-header" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="date"><?php echo date('F j, Y', strtotime(get_field('date'))); ?></div>
        <?php the_content(  ); ?>
      </div>
    </div>
 <?php
      $k++;
      endwhile;
?>
      </div>
      <div class="end-note-container container-fluid">
      <div class="end-note">
        <h1>Be Part Of Our Story!</h1>
      </div>
      </div>
    </section>

<?php get_footer( ); ?>
