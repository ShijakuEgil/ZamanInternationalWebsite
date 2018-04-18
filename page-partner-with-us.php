<?php
    get_header(  );
    get_template_part( 'templates/content', 'banner' );
    get_template_part( 'templates/content', 'page-title' );
?>
<div class="container-fluid partner-body-wrapper">

    <div class="container volunteer-quote-wrapper row no-gutters">
        <i class="volunteer-quote-l fa fa-quote-left text-primary"></i>
        <i class="volunteer-quote-r fa fa-quote-right float-right text-primary"></i>

       <div class="col-6 volunteer-quote-image"
            style="background-image: url('<?php the_field( 'partner_image', get_id_by_slug('partner-with-us') ); ?>')" >
       </div>

       <div class="col-6 volunteer-quote-text-wrapper">
           <p class="description lead text-justify"><?php the_field('quote_text', get_id_by_slug('partner-with-us')); ?></p>
       </div>

    </div>
<?php // NOTE: MAKE AN IMAPCT area starts here ?>
<?php zaman_area_title('partner_impact_area_title', 'partner_impact_area_subtitle', 'partner-with-us'); ?>
<div class="partner-impact-wrapper row no-gutters p-5">
    <?php
    $query = new WP_Query( array(
        'post_type' => 'partner_impact',
        'posts_per_page'=> -1
    ));
    while ($query->have_posts()): $query->the_post();?>

    <div class="col-3 partner-impact-single p-2">
        <div    class=" partner-impact-single-image
                        d-flex align-items-end rounded" 
                style="background-image:url('<?php echo zaman_get_featured_image(); ?>')">
            <a class="partner-impact-link w-100 text-center" href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
        </div>
    </div>
    <?php endwhile; ?>
</div>

<?php // NOTE: OUR PARTNERS area starts here ?>
<?php zaman_area_title('our_partners_area_title', 'our_partners_area_subtitle', 'partner-with-us'); ?>
<?php $query = new WP_Query(array( 'post_type' => 'our_partners', 'posts_per_page' => -1 )); ?>
    <div class="container-fluid mb-5">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <?php $k = 0; ?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <div class="carousel-item col-md-3 <?php if($k == 0): echo 'active'; endif; ?>" >
                    <img class="partner-icon img-fluid mx-auto d-block" src="<?php echo zaman_get_featured_image(); ?>" alt="slide 1">
                    <p class="lead text-center"><?php the_field('name_of_partner'); ?></p>
                    <p class="text-center"><?php the_field('partner_description') ?></p>
                </div>
                <?php $k++; endwhile; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <i class="fa fa-chevron-left fa-lg text-muted"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <i class="fa fa-chevron-right fa-lg text-muted"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>




 <?php get_footer() ?>
