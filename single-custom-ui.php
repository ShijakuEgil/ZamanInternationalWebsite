
<?php
/*
 * Template Name: Custom UI
 * Template Post Type: news, event, blog-post
 */

 get_header();  ?>
 <?php get_header( ); ?>

   <div class="container-fluid single-post">

       <?php if ( have_posts() ):?>

         <?php while ( have_posts() ): the_post();?>

            <article id="post-<?php the_ID();?>" <?php post_class("single-post-div default-display"); ?>>

              <div class="single-post-image" style="background-image: url('<?php echo zaman_get_featured_image()?>')">
                <?php if(get_post_type() == 'news'): ?>
                     <h1 class="single-page-brand">Zaman | News</h1>
                <?php elseif(get_post_type() == 'event'): ?>
                    <h1 class="single-page-brand">Zaman | Calendar</h1>
                <?php elseif(get_post_type() == 'blog-post '): ?>
                    <h1 class="single-page-brand">Zaman | Blog</h1>
                <?php endif; ?>
              </div>

              <div class="container-fluid row no-gutters single-default-ui-wrapper">

                <div class="col-3 single-default-ui-left-side-wrapper">

                  <div class="single-default-ui-title-wrapper">

                    <h1 class="single-default-ui-title"><?php the_title();?></h1>
                  </div>
                </div>
                <div class="col-6 center-wrapper">
                  <?php the_content();?>
                </div>
                <div class="col-3 right-side-wrapper">
                    <?php get_template_part( 'templates/content', 'related-posts' );?>
                </div>
              </div>
            </article>

         <?php endwhile; ?>

       <?php endif; ?>
   </div>
 <?php get_footer( ); ?>
