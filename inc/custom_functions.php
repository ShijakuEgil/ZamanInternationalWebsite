<?php
function zaman_get_embedded_media( $type = array() ){
  $content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
  $embed = get_media_embedded_in_content( $content, $type);

  if(in_array('audio', $type) ):
      $output = str_replace( 'visual=true', '?visual-false', $embed[0] );
  else:
    $output = $embed[0];
  endif;
return $output;
}

//returns the featured image
function zaman_get_featured_image( $type = 'full' ) {
  $src = wp_get_attachment_image_src( get_post_thumbnail_id( ), $type );
  return esc_url( $src[0] );
}

// NOTE: returns the link to the specified page
function zaman_get_page_link($pagetitle){
  return esc_url( get_permalink( get_page_by_title( $pagetitle ) ) );
}

// NOTE: echos the html for the title and description of a page area
// NOTE: parameters are the slug of the page and the get_option paramenter
function zaman_area_title($page_title_slug, $page_description_slug, $option){
     ?>
     <div class="container-fluid title-conponent text-center">
          <div class="row title-row no-gutters">
               <div class="col separator"></div>
               <div class="col-auto title">
                    <h1 class="display-2 mx-5 text-uppercase"><?php the_field( $page_title_slug, get_option( $option )); ?></h1>
               </div>
               <div class="col separator"></div>
          </div>
          <h3 class="description lead container mb-5">
               <?php the_field( $page_description_slug, get_option( $option ));?>
          </h3>
     </div>
<?php
}
