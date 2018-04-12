<article id="post-<?php the_ID(); ?>" <?php post_class('calendar-event-wrapper m-3'); ?>>

    <div class="row no-gutters calendar-content" style="background-image: url('<?php echo zaman_get_featured_image(); ?>')" >

      <div class="col-3 calendar-date d-flex flex-column justify-content-center align-items-center">
          <h2 class="date"><?php echo date('M', strtotime( get_field('date'))); ?></h2>
          <h1 class="date text-primary"><?php echo date('j', strtotime( get_field('date'))); ?></h1>
      </div>

      <div class="col-9 calendar-title d-flex flex-column align-items-start">

        <div class="event-title container-fuild mb-auto p-2">
          <?php the_title( sprintf('<h1 class="title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
        </div>

        <div class="calendar-event-info p-2 text-right" >
            <small>
                <i class="fa fa-calendar float-left text-primary"></i>

                <p class="the-hour"><?php echo date('l, F j, Y', strtotime(get_field('date'))); ?> | <?php echo date('g:i a', strtotime(get_field('start_time')));?> -
                    <?php echo date('g:i a', strtotime( get_field('end_time')));?>
                </p>
            </small>
            <?php $event_location = get_field('location'); ?>
            <small><i class="fa fa-map-marker float-left text-primary"></i><p class=""><?php echo $event_location['address']; ?></p></small>
        </div>
      </div>
    </div>
</article>
