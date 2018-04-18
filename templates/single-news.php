
   <div class="container-fluid single-post">


            <?php //get_template_part('templates/content', 'single-banner'); ?>
            <article id="post-<?php the_ID();?>" <?php post_class("single-post-div default-display"); ?>>
                <div class="container-fluid row no-gutters single-default-ui-wrapper">
                  <div class="col-3 single-default-ui-left-side-wrapper">
                    <div class="single-default-ui-title-wrapper">
                      <h1 class="single-default-ui-title"><?php the_title();?></h1>
                    </div>
                  </div>

                  <div class="col-6 center-wrapper">
                      <?php $post_type_choices = get_field( 'content_type' );
                      //get all the choices of media types that are being uploaded ?>

                      <?php if( in_array( 'image', $post_type_choices ) ): ?>
                        <!-- display gallery of images -->
                          <?php get_template_part( 'templates/content','gallery' ); ?>
  <!--audio display  -->
                    <?php elseif( in_array( 'audio', $post_type_choices ) ): ?>
                    <!--display embeeded audio file  -->
                    <div class="single-default_ui-audio-wrapper">
                    <?php echo zaman_get_embedded_media(array('audio', 'iframe') ); ?>
                    </div>

  <!--video display  -->
                  <?php elseif( in_array( 'video', $post_type_choices ) ): ?>
                    <!--display embedded video file  -->
                        <div class="embed-responsive embed-responsive-16by9 single-default_ui-video-wrapper">
                          <?php echo zaman_get_embedded_media(array('video', 'iframe') ); ?>
                        </div>
                  <?php endif; ?>

                  <?php if( in_array( 'text', $post_type_choices ) ): ?>
                      <p><?php the_field('text'); ?></p>
                  <?php endif; ?>

                  <?php if( in_array( 'link', $post_type_choices ) ): ?>
                    <span><?php the_field('button_info_text') ?></span><a class="single-post-page-link btn btn-lg <?php the_field('page_button_style'); ?>" href="<?php the_field('page_link');?>"><?php the_field('page_link_text');?></a><br><br><br />
                  <?php endif; ?>

                  <?php if( in_array( 'url', $post_type_choices ) ): ?>
                    <span><?php the_field('url_button_info_text') ?></span><a class="single-post-page-link btn btn-lg <?php the_field('url_button_style'); ?>" href="<?php the_field('url_link');?>"><?php the_field('url_button_text');?></a>
                  <?php endif; ?>

                   <?php the_content();?>
                  </div>

                  <div class="col-3 right-side-wrapper">

                      <?php get_template_part( 'templates/content', 'related-posts' );?>

                  </div>
                </div>

            </article>

   </div>
