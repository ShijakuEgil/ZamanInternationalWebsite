<?php
define('GOOGLE_API_KEY', 'AIzaSyA_6oZOskYt1IaUHzjhewzivrDtqFgj9QA');

add_action('wp_enqueue_scripts', 'zaman_goods_page_map_scripts');
function zaman_goods_page_map_scripts() {

  wp_register_script('google_map_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA_6oZOskYt1IaUHzjhewzivrDtqFgj9QA'. '&sensor=false', false , '3');
  wp_enqueue_script('google_map_api');

  wp_register_script('goods_js', get_bloginfo('stylesheet_directory') ."/js/google_maps.js", array('jquery','google_map_api'), false, false );
  wp_enqueue_script('goods_js');

  $locations = array();

  $bin_query = new WP_Query( array(
    'post_type'   =>    'donation-bin',
    'post_per_page' => -1
  ));

  while( $bin_query->have_posts() ) {

    $bin_query->the_post();
    $bin = get_field('bin_address');

    $locations[] = array(
      'loc_name'         =>    get_field('name_of_location'),
      'latitude'         =>    $bin['lat'],
      'longitude'        =>    $bin['lng'],
      'address'          =>    $bin['address'],
      'icon_url'         =>    get_template_directory_uri() .'/img/Donation_bin.png',
      'marker_icon'      =>    get_template_directory_uri() .'/img/donate_bin.png',
      'image_url'        =>    zaman_get_featured_image('thumbnail'),
      'id'               =>    get_the_ID()

    );
  }

  wp_reset_postdata();

  wp_localize_script('goods_js', 'php_args', array(
    'locations'     =>    json_encode($locations)
  ));
}

get_header();
get_template_part( 'templates/content', 'banner' );
get_template_part('templates/content', 'page-title');
 ?>
 <div id="container" class="container-fluid">
   <div id="content" class="content">
     <div id="map-canvas"></div>
     <div class="goods-bin-info-wrapper">
       <h3 class="goods-bin-info-title">Find A donation bin close to your area!</h3>
       <div class="goods-search-bin">
         <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputCity">Location</label>
            <input type="text" class="form-control" id="addressInput" placeholder="Enter City, State, or/and Zip Code">
          </div>
          <div class="form-group col-md-4">
            <label for="radiusSelect">Radius</label>
            <select id="radiusSelect" class="form-control">
              <option value="25" selected>25 mi</option>
              <option value="15">15 mi</option>
              <option value="10">10 mi</option>
              <option value="5">5 mi</option>
            </select>
          </div>
          <button id="searchButton" class="btn btn-primary btn-lg bin-search-button" type="button" id="searchButton" value="Search">SEARCH</button>
        </div>
         <div id="locationSelect" class="form-group container-fluid bin-location-select">
        </div>
      </div>
    </div>
  </div>
</div>


 <?php get_footer(); ?>
