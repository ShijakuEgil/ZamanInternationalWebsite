<?php
// DISPLAYING THE TITLE OF A PAGE
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('title-wrapper container-fluid'); ?>>
  <!--title-component-->
  <div class="container-fluid title-conponent">
    <div class="row title-row no-gutters justify-content-center">
      <div class="col separator"></div>
      <div class="col-auto title">
        <h1><?php wp_title(''); ?></h1>
      </div>
      <div class="col separator"></div>
    </div>
    <p class="description">
      <?php  echo rwmb_meta( 'description' ); ?>
  </div>
</article>
