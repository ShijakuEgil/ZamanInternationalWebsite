<article id="post-<?php the_ID(); ?>" <?php post_class('boost-program-wrapper'); ?>>

    <h1 class="text-center display-1 boost-program-title m-3"><?php the_title(); ?></h1>
    <div class="row no-gutters boost-programs-row-wrapper">

        <div    class="col-6 boost-program-image rounded"
                style="background-image:url('<?php echo zaman_get_featured_image();?>');">
        </div>

        <div class="col-6 boost-get-involved-button d-flex justify-content-center">

            <div class="boost-program-btn-group btn-group-vertical w-75 align-self-center rounded" role="group" aria-label="Basic example">
                <h1 class="boost-get-involved-button-title text-center w-100"><?php the_field('boost_button_group_title'); ?></h1>
                <button onclick="window.location='<?php the_field('button_page_link'); ?>';" type="button" class="btn btn-lg btn-dark"><?php the_field( 'button_text'); ?></button>
                <button onclick="window.location='<?php the_field('middle_button_page_link');?>';" type="button" class="btn btn-lg btn-dark"><?php the_field( 'middle_button_text');?></button>
                <button onclick="window.location='<?php the_field('bottom_button_page_link'); ?>';" type="button" class="btn btn-lg btn-dark"><?php the_field( 'bottom_button_text' ); ?></button>
            </div>
        </div>

    </div>
    <div class="container-fluid boost-program-content pt-5">
        <?php the_content(); ?>
    </div>

</article>
