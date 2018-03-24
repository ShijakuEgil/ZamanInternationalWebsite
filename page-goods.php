<?php
get_header();
get_template_part( 'templates/content', 'banner' );
get_template_part('templates/content', 'page-title');
 ?>
 <!-- <style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>

<div class="acf-map">
    <?php
          $args = array(
            'post_type' => 'donation-bin',
            'post_per_page' => -1
          );
          $contact_us_query = new WP_Query($args);
          while($contact_us_query->have_posts()):$contact_us_query->the_post();
     ?>
     <?php
          $location = get_field('bin_address');

          if( !empty($location) ):
          ?>
          	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
              <h4><?php the_field('name_of_location') ?></h4>
              <p><?php echo $location['address']; ?></p>
            </div>

    <?php endif;
    endwhile;
    ?>
</div>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF2GtauZYiPD4kmTozqHMLHImnXXwPiiU"></script> -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF2GtauZYiPD4kmTozqHMLHImnXXwPiiU&callback=initMap">
</script> -->
 <?php
get_footer();
?>
