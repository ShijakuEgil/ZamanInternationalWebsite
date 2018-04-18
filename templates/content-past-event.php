<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <hr>

    <div    class=" row rounded
                    past-events-image-container"
            style="background-image: url('<?php echo zaman_get_featured_image(); ?>')">

        <div class="rounded-left col-3 d-flex flex-column align-items-center
                    past-event-calendar-date-wrapper">

            <h2 class="past-event-date"><?php echo date( 'M', strtotime( get_field( 'date' ) ) ); ?></h2>
            <h1 class="past-event-date"><?php echo date( 'j', strtotime( get_field( 'date' ) ) ); ?></h1>

        </div>

        <div class="col-6
                    past-event-calendar-title">
            <?php the_title( sprintf('<h1 class="past-event-title"><a class="past-event-title-link" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
        </div>

    </div>

</article>
