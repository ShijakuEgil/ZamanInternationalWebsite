<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>
<div class="container-fluid employement-boddy-wrapper">

    <div class="employement-inner-wrapper rounded mb-5 px-5" >

        <?php $query = new WP_Query(array( 'post_type'  =>  'job_openings', 'posts_per_page'    =>  -1) ); ?>

        <?php while($query->have_posts() ): $query->the_post(); ?>

            <div class="employement-single-wrapper rounded mb-5 p-5 d-flex flex-column">
                <p class="posted-time lead">Posted on: <?php the_time('l, F jS, Y');?></p>
                <h1 class="display-4"><?php the_title(); ?></h1>
                <p class="lead mb-2"><?php the_excerpt(); ?></p>
                <hr class="job-hr">
                <a class="employement-learn-more-link w-100 text-right" href="<?php echo get_permalink(); ?>">Learn More</a>
            </div>

        <?php endwhile; ?>

    </div>

</div>
 <?php get_footer() ?>
