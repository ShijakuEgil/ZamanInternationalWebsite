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
function zaman_get_featured_image( $type = 'full' ){
  $src = wp_get_attachment_image_src( get_post_thumbnail_id(  ), $type );
  return esc_url( $src[0] );
}

// NOTE: returns the link to the specified page
function zaman_get_page_link($pagetitle){
  return esc_url( get_permalink( get_page_by_title( $pagetitle ) ) );
}
