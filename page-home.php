<?php get_header(); ?>
  <main>
<!--carousel slide-->
      <div id="myCarousel" class="carousel carousel-fade" data-ride="carousel" data-interval="3000">

          <!--carousel-inner-->
          <div role="listbox" class="carousel-inner embed-responsive ">
              <?php
              $k = 0;
              $args = array('post_type' => 'home_page_slides');
              $query = new WP_Query($args);
              $array_rev = array_reverse($query->posts);
              $query->posts = $array_rev;
              while($query->have_posts()) : $query->the_post();
              ?>
              <!-- carousel-item -->
              <div class="carousel-item embed-responsive-item <?php if($k == 0){ echo 'active'; }?>">

                <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
                <?php if( get_field( 'radio_button_text' ) == 'Show text') :?>

                  <div class="container-fluid slide-heading">

                    <div class="carousel-caption">
                      <!-- <h1><?php //the_field('large_heading'); ?></h1> -->
                      <div class="animated-heading-underline"></div>
                      <div class="slider-paragraph"><p><?php the_field('description_text');?></p></div>
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
            <h2 class="cd-headline clip">
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
                      <?php $count++; endforeach;; ?>
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
    </div><!--#myCarousel-->
    <!--button group -->
    <div id="button_group_id" class="container-fluid">
      <!-- <button type="button" class="btn btn-outline-success">Success</button>
      <button type="button" class="btn btn-outline-danger">Danger</button>
      <button type="button" class="btn btn-outline-warning">Warning</button>
      <button type="button" class="btn btn-outline-info">Info</button> -->
        <button class="btn need-help-btn">
          <div class="btn-icon">
            <i class="fa fa-handshake-o"></i>
          </div>
          <span>Need Help</span>
        </button>

        <button class="btn volunteer-btn">
          <div class="btn-icon">
            <i class="fa fa-hand-paper-o"></i>
          </div>
          <span>Volunteer</span>
        </button>

        <button class="btn donate-btn">
          <div class="btn-icon">
            <i class="fa fa-money"></i>
          </div>
          <span>Donate</span>
        </button>

        <button class="btn wishlists-btn">
          <div class="btn-icon">
            <i class="fa fa-list-ul"></i>
          </div>
          <span>Wishlists</span>
        </button>
    </div>
  <!--button group end  -->

    <!--title-component-->
    <div class="container-fluid title-conponent">
      <div class="row title-row no-gutters justify-content-center">
        <div class="col separator"></div>
        <div class="col-auto title">
          <h1>WHAT WE DO</h1>
        </div>
        <div class="col separator"></div>
      </div>
      <p class="description">
        Nunc luctus in metus eget fringilla.
        Aliquam sed justo ligula. Vestibulum nibh erat,
        pellentesque ut laoreet vitae.
    </div>
    <!--title-component end-->

    <!--start of featured boxes with icons  -->
    <div class="row no-gutters justify-content-center impact-boxes container-fluid">
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-eye icon"></i>
            <h3 class="title-of-box">Vision</h3> <!-- change tittle of box here-->
            <p class="description-of-box">
              Aenean tortor est, vulputate quis leo in,
              vehicula rhoncus lacus. Praesent aliquam in tellus eu.
            </p><!-- change description of box here-->
            <a href="#" class="btn btn-outline-primary">Learn more »</a>
          </div>
        </div>
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-bullseye icon"></i>
            <h3 class="title-of-box">Mission</h3>
            <p class="description-of-box">
              Aenean tortor est, vulputate quis leo in,
              vehicula rhoncus lacus. Praesent aliquam in tellus eu.
            </p>
            <a href="#" class="btn btn-outline-primary">Learn more »</a>
          </div>
        </div>
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-line-chart icon"></i>
            <h3 class="title-of-box">Impact</h3>
            <p class="description-of-box">
              Aenean tortor est, vulputate quis leo in,
               vehicula rhoncus lacus. Praesent aliquam in tellus eu.
             </p>
            <a href="#" class="btn btn-outline-primary">Learn more »</a>
          </div>
        </div>
    </div>
    <!--end of featured boxes with icon  -->
    <!--title-component-->
    <div class="container-fluid title-conponent">
      <div class="row no-gutters title-row justify-content-center">
        <div class="col separator"></div>
        <div class="col-auto title">
          <h1>FEATURED CONTENT</h1>
        </div>
        <div class="col separator"></div>
      </div>
      <p class="description">
        Nunc luctus in metus eget fringilla.
        Aliquam sed justo ligula. Vestibulum nibh erat,
        pellentesque ut laoreet vitae.
    </div>
    <!--title-component end-->

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
     <!-- </div> -->
    </div>
    <!--Featured content updated end-->

        <!--   $args_cat = array(
           'include'   =>  '14, 15, 16'
          );
          $categories = get_categories($args_cat);
          foreach($categories as $category):

              $args = array(
                'type'            =>    'post',
                 'posts_per_page'   =>     1,
                 'category__in'    =>    $category->term_id,
               ); -->

    <!--title-component-->
    <div class="container-fluid title-conponent">
      <div class="row title-row justify-content-center">
        <div class="col separator"></div>
        <div class="col-auto title">
          <h1>STAY CONNECTED</h1>
        </div>
        <div class="col separator"></div>
      </div>
      <p class="description">
        Nunc luctus in metus eget fringilla.
        Aliquam sed justo ligula. Vestibulum nibh erat,
        pellentesque ut laoreet vitae.
    </div>
    <!--title-component end-->
    <div class="container-fluid newsletter">
      <div class="row no-gutters newsletter-content">
        <div class="col-3 newsletter-title">
            <i class="fa fa-newspaper-o"></i>
            <h1>Subscribe<br />To Our<br /><span>Newsletter</span></h1>
        </div>
        <div class="col-1 newsletter-triangle-title">
            <!-- <i class="fa fa-play"></i> -->
        </div>
        <div class="col-3 newsletter-email">
          <label class="email-form" for="exampleInputEmail1"><h3>What is your email?</h3></label>
          <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="col-1 newsletter-triangle-email">
            <!-- <i class="fa fa-play"></i> -->
        </div>
        <div class="col submit">
          <h3 class="newsletter-submit-title">What is your interest?</h3>
          <ul>
            <li>
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Zaman Programs
              </label>
            </li>
            <li>
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck2">
                Volunteering
              </label>
            </li>
            <li>
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck3">
                Good Deeds Resale
              </label>
            </li>
            <li>
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck4">
                Donations
              </label>
            </li>
          </ul>
          <button type="submit" class="btn btn-outline-light">Submit</button>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
