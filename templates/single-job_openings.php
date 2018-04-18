<?php //get_template_part('templates/content', 'single-banner'); ?>
<article
    id="post-<?php the_ID();?>"
    <?php post_class("container-fluid single-php-boddy-wrapper");?>>
    <div class="container single-php-content-wrapper">
        <h1 class="display-1 m-5 single-php-job-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <a class="h4 float-right" href="<?php the_field('application_form') ?>">Apply For Position</a>
    </div>
</article>
