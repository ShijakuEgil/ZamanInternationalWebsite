<article id="post-<?php the_ID(); ?>" <?php post_class('col-4 container-fluid volunteer-opts-single'); ?>>

    <div
        class="volunteer-opts-single-image container-fluid"
        style="background-image:url('<?php echo zaman_get_featured_image(); ?>')">

        <?php if(get_field('select_opportunity_type') == 'post'): ?>
            <a class="learn-more-link" href="<?php the_field('post_link'); ?>" >Learn More</a>
            <a class="become-a-volunteer-link" href="<?php the_field('volunteer_google_form_url'); ?>" >
                Volunteer Now</a>
            <p class="lead volunteer-opt-title text-right"><?php the_field('opportunity_title'); ?></p>
        <?php elseif(get_field('select_opportunity_type') == 'new'): ?>
            <a class="learn-more-link" href="<?php echo get_permalink();?>" >Learn More</a>
            <a class="become-a-volunteer-link" href="<?php the_field('volunteer_google_form_url'); ?>" >
                Volunteer Now</a>
            <p class="lead volunteer-opt-title text-right"><?php the_field('opportunity_title'); ?></p>
        <?php endif; ?>
    </div>

</article>
