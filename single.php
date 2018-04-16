<?php get_header(); ?>
<?php get_template_part('templates/container', 'banner-quotes'); ?>
<?php get_template_part('templates/single', get_post_type()); ?>
<?php //if(get_post_type() == 'job_openings'): ?>
<!-- <div class="container-fluid single-php-boddy-wrapper" > -->

<!-- <div class="container single-php-content-wrapper"> -->
    <!-- <h1 class="display-1 m-5 single-php-job-title"><?php //the_title(); ?></h1> -->
    <!-- <?php// the_content(); ?> -->

    <!-- <a href="<?php //the_field('application_form') ?>">Apply For Position</a> -->
<!-- </div> -->
<?php //else: ?>
    <?php //the_content() ?>
<?php //endif; ?>
<!-- </div> -->
<?php get_footer();  ?>
