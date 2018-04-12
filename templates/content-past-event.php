<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <hr>
  <!-- <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?> -->
  <div class="row past-events-image-container" style="background-image: url('<?php echo zaman_get_featured_image(); ?>')">
    <div class="col-3 calendar-date d-flex flex-column justify-content-center align-items-center ">
        <h2 class="date text-center"><?php echo date( 'M', strtotime( get_field( 'date' ) ) ); ?></h2>
        <h1 class="date text-center"><?php echo date( 'j', strtotime( get_field( 'date' ) ) ); ?></h1>
    </div>
    <div class="col-6 calendar-title">
        <?php the_title( sprintf('<h1 class="title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
    </div>
  </div>
</article>
