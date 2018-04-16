<article id="post-<?php the_ID(); ?>" <?php post_class('banner-wrapper container-fluid'); ?>>

  <div class="row no-gutters container-fluid banner-image" style="background-image: url('<?php echo zaman_get_featured_image(); ?>')">
    <div class="col-9 banner-title-header d-flex align-items-center">
         <div class="title-wrapper">
              <h1 class="banner-title">Zaman |<strong>
              <?php
              if(get_the_id() == '497' || get_the_id() == '499'):?>
              Donate <?php wp_title('');?></strong></h1>
              <?php
           else:?>
               <?php wp_title('');?></strong></h1>
              <?php
           endif; ?>
         </div>

    </div>
  </div>
</article>
