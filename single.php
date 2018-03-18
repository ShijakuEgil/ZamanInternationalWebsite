<?php
/*

  @package Zamantheme
  --Single Post Format
*/
 ?>
 <?php get_header( ); ?>

   <div class="container-fluid no-gutters single-post">

       <?php if ( have_posts() ):?>

         <?php while ( have_posts() ): the_post();?>

            <article id="post-<?php the_ID();?>" <?php post_class("single-post-div custom-display"); ?>>

              <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full', false, '' ); ?>
              <div class="single-post-image"
              style="background-image: url('<?php echo esc_url( $src[0] ); ?>')"></div>

              <?php if(get_field('display_type') == 'custom'){
                    the_content();
                  }
                  elseif(get_field('display_type')== 'default') {
                      // get_template_part('single-template/single')
                  }?>
            </article>

         <?php endwhile; ?>

       <?php endif; ?>
   </div>
 <?php get_footer( ); ?>


 <!-- <article id="post-<?php //the_ID();?>" <?php //post_class(); ?>>
   <?php //$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),
  // 'full', false, '' ); ?>
   <div class="container-fluid single-blog-image"
       style="background-image: url('<?php //echo esc_url( $src[0] ); ?>')"></div>
       <?php //the_title('<h1 class="entry-title">','</h1>'); ?>
       <small class="single-blog-credits"><i class="fa fa-pencil"></i>Posted by <strong><?php //echo get_the_author();?></strong>
           <span class="single-blog-tags"><?php //the_tags('<i class="fa fa-tags"></i>',' / ') ?></span>
       </small>
       <hr>
     <?php //the_content(); ?>
     <hr>
 </article> -->
