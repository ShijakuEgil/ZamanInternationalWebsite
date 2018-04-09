<?php
// DISPLAYING THE TITLE OF A PAGE
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('title-wrapper container-fluid'); ?>>
  <!--title-component-->
  <div class="container-fluid title-conponent text-center">
    <div class="row title-row no-gutters ">
      <div class="col separator"></div>
      <div class="col-auto title">
        <?php
        if(get_the_id() == '497' || get_the_id() == '499'):?>
          <h1 class="display-2 mx-5 text-uppercase">Donate <?php wp_title(''); ?></h1>
        <?php
        else:?>
          <h1 class="display-2 mx-5 text-uppercase"><?php wp_title(''); ?></h1>
        <?php
        endif; ?>
      </div>
      <div class="col separator"></div>
    </div>
    <h3 class="description lead container" >
      <?php  echo rwmb_meta( 'description' ); ?></h3>

  </div>
</article>
