<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>
<div class="container-fluid employement-boddy-wrapper">

    <div class="employement-inner-wrapper mb-5">

        <?php $query = new WP_Query(array( 'post_type'  =>  'job_openings', 'posts_per_page'    =>  -1) ); ?>

        <?php while($query->have_posts() ): $query->the_post(); ?>
            <div class="employement-single-wrapper mb-5 p-2 d-flex">

                <h1 class="display-3"><?php the_title();?></h1>
                <p class="posted-time lead">Posted on: <?php the_time('l, F jS, Y'); ?></p>
                <a class="employement-learn-more-link" href="<?php echo get_permalink(); ?>">Learn More</a>

            </div>
        <?php endwhile; ?>

    </div>

</div>



 <?php get_footer() ?>
