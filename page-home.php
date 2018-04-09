<?php get_header(); ?>
  <main>
<!--carousel slide-->
      <div id="myCarousel" class="carousel carousel-fade" data-ride="carousel" data-interval="3000">

          <!--carousel-inner-->
          <div role="listbox" class="home-carousel-inner carousel-inner embed-responsive ">
              <?php
              $k = 0;
              $args = array('post_type' => 'home-carousel');
              $query = new WP_Query($args);
              $array_rev = array_reverse($query->posts);
              $query->posts = $array_rev;
              while($query->have_posts()) : $query->the_post();
              ?>
              <!-- carousel-item -->
              <div class="carousel-item embed-responsive-item <?php if($k == 0){ echo 'active'; }?>">

                <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
                <?php if( get_field( 'show_text' ) == true) :?>

                  <div class="container-fluid slider-heading">
                    <div class="carousel-caption clearfix">
                      <div class="animated-heading-underline"></div>
                      <div class="slider-paragraph"><p><?php the_field('image_text');?></p></div>
                    </div>
                  </div>
                <?php endif; ?>
              </div><!--carousel-inner-->
              <?php $k++; ?>
              <?php endwhile; ?>
          </div>
          <!--carousel-inner-->

          <!--animated heading start -->
          <div class="caption v-middle text-center" id="animated-heading">
            <h2 class="cd-headline clip display-1">
              <?php
                $args = array('post_type' => 'animated-heading');?>
              <?php $query = new WP_Query($args);
              while($query->have_posts()) : $query->the_post();?>
              <span class="blc"><?php the_field('heading_text'); ?> | </span>
              <?php
              $fields = get_post_meta($post->ID, 'text', false);
              if(count($fields) != 0) { ?>
                <span class="cd-words-wrapper">

                  <?php $count = 0 ?>
                    <?php foreach($fields as $fields): ?>
                      <b class="<?php if($count == 0){ echo 'is-visible'; }?>"><?php echo $fields; ?></b>
                      <?php $count++; endforeach; ?>
                </span>
                <?php } ?>
                <?php endwhile; ?>
              </h2>

            </div><!--.caption-->
          <!--animated heading end  -->

          <!--prev next index-->
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--prev next index end  -->
          <!--button group -->
          <?php
          $post_id = intval( get_option('page_for_posts'));
          ?>
          <div id="button_group_id" class="container-fluid d-flex flex-row justify-content-around">
               <form class=""action="<?php the_field('orange_button_page_link', get_option( 'page_on_front' ));?>">
                   <button type="submit" class="btn need-help-btn">
                     <div class="btn-icon d-flex align-items-center justify-content-center">
                       <i class="fa fa-handshake-o"></i>
                     </div>
                     <span><?php the_field('orange_button_text', get_option( 'page_on_front' ));?></span>
                    </button>
               </form>

               <form action="<?php the_field('blue_button_page_link', get_option( 'page_on_front' ));?>">
                   <button class="btn volunteer-btn">
                        <div class="btn-icon d-flex align-items-center justify-content-center">
                          <i class="fa fa-hand-paper-o"></i>
                         </div>
                         <span><?php the_field('blue_button_text', get_option( 'page_on_front' )); ?></span>
                    </button>
               </form>
               <form action="<?php the_field('green_button_page_link', get_option( 'page_on_front' ));?>">
                    <button class="btn donate-btn">
                     <div class="btn-icon d-flex align-items-center justify-content-center">
                       <i class="fa fa-money"></i>
                     </div>
                     <span><?php the_field('green_button_text', get_option( 'page_on_front' )); ?></span>
                   </button>
              </form>
              <form action="<?php the_field('yellow_button_page_link', get_option( 'page_on_front' ));?>">
                   <button class="btn wishlists-btn">
                     <div class="btn-icon d-flex align-items-center justify-content-center">
                       <i class="fa fa-list-ul"></i>
                     </div>
                     <span><?php the_field('yellow_button_text', get_option( 'page_on_front' )); ?></span>
                   </button>
              </form>
          </div>
        <!--button group end  -->
    </div><!--#myCarousel-->

    <?php zaman_area_title('what_we_do_title', 'what_we_do_subtitle', 'page_on_front'); ?>
    <!--title-component end-->

    <!--start of featured boxes with icons  -->
    <div class="row no-gutters justify-content-center impact-boxes container-fluid">
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-eye icon"></i>
            <h3 class="title-of-box"> <?php the_field('first_title', get_option('page_on_front')); ?></h3>

               <?php the_field('first_subtitle', get_option('page_on_front')); ?>

            <a href="<?php the_field('first_page_link', get_option('page_on_front'));?>"
                 class="btn btn-outline-primary">Learn more »</a>
          </div>
        </div>
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-bullseye icon"></i>
            <h3 class="title-of-box"> <?php the_field('second_title', get_option('page_on_front')); ?></h3>

              <?php the_field('second_subtitle', get_option('page_on_front')); ?>

            <a href="<?php the_field('second_page_link', get_option('page_on_front'));?>"
                 class="btn btn-outline-primary">Learn more »</a>
          </div>
        </div>
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-line-chart icon"></i>
            <h3 class="title-of-box"> <?php the_field('third_title', get_option('page_on_front')); ?></h3>

              <?php the_field('third_subtitle', get_option('page_on_front')); ?>

            <a href="<?php the_field('third_page_link', get_option('page_on_front'));?>"
                 class="btn btn-outline-primary">Learn more »</a>
          </div>
        </div>
    </div>
    <?php
    zaman_area_title('featured_content_title', 'featured_content_subtitle', 'page_on_front');
    ?>

    <!--Featured content updated-->
    <div class="row no-gutters container-fluid featured-contents">
     <!-- <div class="col-4 single-post"> -->
<?php
          $args = array(
            'post_type' => 'event',
            'posts_per_page' => 1
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'time_date',
            // 'order' => 'ASC'
              );
      $event_query = new WP_Query($args);
      // $check = true;
      if($event_query->have_posts() ):
          // $currDate = new DateTime(current_time( 'Y-m-d H:i' ));
          while($event_query->have_posts() ) : $event_query->the_post();
                // $calDate = new DateTime(get_field( 'time_date' ));
                  // if($calDate >= $currDate){
               get_template_part( 'templates/content', 'featured' );
                    // $check = false;
                    // }
          endwhile;
      endif;
      wp_reset_postdata();
?>
     <!-- </div> -->
     <!-- <div class="col-4 single-post"> -->
<?php
      $args = array(
        'post_type' => 'news',
        'posts_per_page' => 1
      );
      $news_query = new WP_Query($args);
      if($news_query->have_posts() ):
          while($news_query->have_posts()) : $news_query->the_post();
              get_template_part( 'templates/content', 'featured' );
          endwhile;
      endif;
?>
     <!-- </div> -->
     <!-- <div class="col-4 single-post"> -->
<?php
      $args = array(
        'post_type' => 'blog-post',
        'posts_per_page' => 1
      );
      $blog_query = new WP_Query($args);
      if($blog_query->have_posts() ):
          while($blog_query->have_posts()) : $blog_query->the_post();
              get_template_part( 'templates/content', 'featured' );
          endwhile;
      endif;
?>
    </div>
    <!--Featured content updated end-->

          <!-- $args_cat = array(
           'include'   =>  '14, 15, 16'
          );
          $categories = get_categories($args_cat);
          foreach($categories as $category):

              $args = array(
                'type'            =>    'post',
                 'posts_per_page'   =>     1,
                 'category__in'    =>    $category->term_id,
               ); -->
<?php
     zaman_area_title('newsletter_title', 'newsletter_subtitle', 'page_on_front');
               ?>
    <div class="newsletter my-5 container-fluid text-center">


             <div id="mc_embed_signup">
                  <form action="https://zamaninternational.us16.list-manage.com/subscribe/post?u=b5539cd54d0f9cc0863d38f73&amp;id=39c84a9ba0"
                       method="post"
                       id="mc-embedded-subscribe-form"
                       name="mc-embedded-subscribe-form"
                       class="validate"
                       target="_blank" novalidate>

                       <div class="row no-gutters newsletter-content container-fluid">
                         <div class="col-sm newsletter-title d-flex justify-content-center align-items-center">
                             <i class="fa fa-newspaper-o float-left mx-xxl-5 mx-xl-4 ml-lg-5"></i>
                             <h1 class="mx-xxl-5 mx-xl-4 mx-lg-3 mx-">Subscribe<br />To Our<br /><span>Newsletter</span></h1>
                         </div>
                         <div class="col-sm-1 newsletter-triangle-title">
                             <!-- <i class="fa fa-play"></i> -->
                         </div>

                         <div class="col-sm col-md-2 col-lg-2 col-xl-3 col-xxl-3 newsletter-email d-flex justify-content-center align-items-center">
                              <div class="indicates-required">
                                   <span class="asterisk">*</span> All fields are required
                              </div>
                              <!-- <div id="mc_embed_signup_scroll " > -->
                              <div class="email-wrapper container-fluid">
                                 <div class="mc-field-group">
                       	          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email Address">
                                 </div>
                              </div>
                         </div>
                         <div class="col-sm-1 newsletter-triangle-email">
                             <!-- <i class="fa fa-play"></i> -->
                         </div>
                         <div class="col-sm submit d-flex justify-content-center align-items-center">
                                   <div class="indicates-required">
                                        <span class="asterisk">*</span> All fields are required
                                   </div>
                              <div class="submit-wrapper container-fluid">


                                   <div class="mc-field-group">
                            	          <input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name">
                                   </div>
                                   <div class="mc-field-group">
                       	               <input type="text" value="" name="LNAME" class="required" id="mce-LNAME" placeholder="Last Name">
                                   </div>
                            	     <div id="mce-responses" class="clear">
                            		     <div class="response" id="mce-error-response" style="display:none"></div>
                            		     <div class="response" id="mce-success-response" style="display:none"></div>
                            	     </div>
                                     <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                 <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                         <input type="text" name="b_b5539cd54d0f9cc0863d38f73_39c84a9ba0" tabindex="-1" value="">
                                 </div>
                                 <div class="clear">
                                      <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-outline-light">
                                 </div>
                              </div>
                         </div>
                    </div>
                      <!-- </div> -->
               </form>


   </div>
 </div>
        <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	/* #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; } */
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
(function($) {
     window.fnames = new Array();
     window.ftypes = new Array();
     fnames[0]='EMAIL';
     ftypes[0]='email';
     fnames[1]='FNAME';
     ftypes[1]='text';
     fnames[2]='LNAME';
     ftypes[2]='text';
     fnames[3]='MMERGE3';
     ftypes[3]='text';
     fnames[4]='MMERGE4';
     ftypes[4]='text';
     fnames[5]='MMERGE5';
     ftypes[5]='text';
     fnames[6]='MMERGE6';
     ftypes[6]='text';
     fnames[7]='MMERGE7';
     ftypes[7]='text';
     fnames[8]='MMERGE8';
     ftypes[8]='text';
     fnames[9]='MMERGE9';
     ftypes[9]='text';
     fnames[10]='MMERGE10';
     ftypes[10]='text';
     fnames[11]='MMERGE11';
     ftypes[11]='text';
}(jQuery));
var $mcj = jQuery.noConflict(true);
</script>
<!--End mc_embed_signup-->


  </main>
<?php get_footer(); ?>
