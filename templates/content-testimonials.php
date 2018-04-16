<article
    id="post-<?php the_ID(); ?>"
    <?php post_class('col-4 container-fluid testimonials-single d-flex flex-column'); ?>>

    <i class="testimonials-quote-l fa fa-quote-left text-primary"></i>
    <i class="testimonials-quote-r fa fa-quote-right float-right text-primary"></i>

    <div
        class="testimonials-image"
        style="background-image:url('<?php echo zaman_get_featured_image(); ?>')">
    </div>

    <div class="conatiner-fluid testimonials-quote-wrapper">
        <p class="lead "><?php the_field('testimonial_quote'); ?></p>
    </div>

</article>
