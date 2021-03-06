<?php
define('GOOGLE_API_KEY', 'AIzaSyA_6oZOskYt1IaUHzjhewzivrDtqFgj9QA');

add_action('wp_enqueue_scripts', 'zaman_goods_page_map_scripts');
function zaman_goods_page_map_scripts() {

  wp_register_script('google_map_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA_6oZOskYt1IaUHzjhewzivrDtqFgj9QA', false , '3');
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
      'icon_url'         =>    get_template_directory_uri() .'/img/donate_bin.png',
      'marker_icon'      =>    get_template_directory_uri() .'/img/Donation_bin.png',
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
       <h3 class="goods-bin-info-title">Find a donation bin near you!</h3>
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
        <small class="goods-directions-subtitle">Select an address for directions to the bin.</small>
         <div id="locationSelect" class="form-group container-fluid bin-location-select">
           <div id="right-panel"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
     zaman_area_title('area_title', 'area_subtitle', 'page_for_posts');
               ?>
<div class="container-fluid goods-what-donate-banner" style="background-image: url('<?php echo get_template_directory_uri();?>/img/goods-banner.jpg')">

  <div class="goods-acceptable">
    <h1 class="text-success"> <?php the_field('acceptable_list_title', get_option('page_for_posts')); ?></h1>
      <?php the_field('acceptable_items', get_option('page_for_posts')); ?>
  </div>

  <div class="goods-not-acceptable">
    <h1 class="text-danger"><?php the_field('not_acceptable_list_title', get_option('page_for_posts')); ?></h1>
    <?php the_field('not_acceptable_items', get_option('page_for_posts') ); ?>
  </div>

  <div class="row container-fluid goods-buttons-wrapper">
    <div class="col-4">
      <label for="goodsButton"><?php the_field('left_button_description', get_option('page_for_posts') ); ?></label>
      <button
            onclick="window.location='<?php the_field('left_button_page_link', get_option('page_for_posts') ); ?>';"
            id="goodsButton"
            class="btn btn-primary btn-lg">

            <?php the_field('left_button_text', get_option('page_for_posts') ); ?>

        </button>
    </div>

    <div class="col-4">
      <label for="monetaryButton"><?php the_field('center_button_description', get_option('page_for_posts') ); ?></label>
      <button
            onclick="window.location='<?php the_field('center_button_page_link', get_option('page_for_posts') ); ?>';"
            id="monetaryButton"
            class="btn btn-primary btn-lg">

            <?php the_field('center_button_text', get_option('page_for_posts') ); ?>

      </button>
    </div>

    <div class="col-4">
      <label for="whishlistsButton"><?php the_field('right_button_description', get_option('page_for_posts') ); ?></label>
      <button
            onclick="window.location='<?php the_field('right_button_page_link', get_option('page_for_posts') ); ?>';"
            id="whishlistsButton"
            class="btn btn-primary btn-lg">

            <?php the_field('right_button_text', get_option('page_for_posts') ); ?></button>
    </div>
  </div>
</div>
<?php get_footer(); ?>
