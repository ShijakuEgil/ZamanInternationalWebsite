<article id="post-<?php the_ID(); ?>" <?php post_class('calendar-event-wrapper m-3'); ?>>

    <div class="row no-gutters calendar-content rounded" style="background-image: url('<?php echo zaman_get_featured_image(); ?>')" >

        <div class="col-3 calendar-date rounded-left d-flex align-items-center">
            <h2 class="date display-1 m-1"><?php echo date('M', strtotime( get_field('date'))); ?></h2>
            <h1 class="date text-primary display-1 m-1"><?php echo date('j', strtotime( get_field('date'))); ?></h1>
        </div>

        <div class="col-9 calendar-title d-flex flex-column align-items-start">

            <div class="event-title container-fuild mb-auto p-2">
                <?php the_title( sprintf('<h1 class="title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
            </div>

            <div class="calendar-event-info p-2 text-right rounded" >
                <i class="fa fa-calendar"></i>
                <i class="fa fa-map-marker"></i>
                <small>
                    <p class="the-hour"><?php echo date('l, F j, Y', strtotime(get_field('date'))); ?> | <?php echo date('g:i a', strtotime(get_field('start_time')));?> -
                        <?php echo date('g:i a', strtotime( get_field('end_time')));?>
                    </p>
                </small>

                <?php $event_location = get_field('location'); ?>

                <small>

                    <p class="lead"><?php echo $event_location['address']; ?></p>
                </small>

            </div>

        </div>

    </div>

</article>
