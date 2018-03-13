<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php $src =
  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
<div class="row no-gutters container-fluid calendar-content">
  <div class="col-3 calendar-date">
      <h2 class="date"><?php echo date('M', strtotime(get_field('date'))); ?></h1>
      <h1 class="date"><?php echo date('j', strtotime(get_field('date'))); ?></h1>
  </div>
  <div class="col-6 calendar-title">
    <div class="event-title">
      <?php the_title( sprintf('<h1 class="title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
    </div>
    <div class="event-info">
      <small><i class="fa fa-calendar"></i><?php echo date('l, F j, Y', strtotime(get_field('date'))); ?> |
      <span class="the-hour"><?php echo date('g:i a', strtotime(get_field('start_time')));?> -
       <?php echo date('g:i a', strtotime(get_field('end_time')));?>  </span> </small>
       <?php $event_location = get_field('location'); ?>
       <h6><i class="fa fa-map-marker"></i><?php echo $event_location['address']; ?></h6>
    </div>

  </div>
    <div class="col-3 calendar-image"
         style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
    </div>
</div>
</article>
