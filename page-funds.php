<?php
get_header();
get_template_part( 'templates/content', 'banner' );
get_template_part('templates/content', 'page-title');
 ?>

<div class="container-fluid funds-body-wrapper">
  <ul class="nav nav-tabs nav-justified" id="fundsTab" role="tablist">
    <li class="funds-nav-item nav-item">
      <a class="funds-nav-link nav-link active display-4" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Recurring Donation</a>
    </li>
    <li class="funds-nav-item nav-item">
      <a class="funds-nav-link nav-link display-4" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">One Time Donation</a>
    </li>
    <li class="funds-nav-item nav-item">
      <a class="funds-nav-link nav-link display-4" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Goods Donation</a>
    </li>
  </ul>
  <div class="tab-content" id="fundsTabContent">
    <?php
  $args = array(
  'post_type'		=> 'donation-page-url',
  'posts_per_page'	=> -1,
  'meta_key'		=> 'type_of_donation',
  'meta_value'	=> 'recurring'
  );
  $query = new WP_Query($args);
  ?>
    <div class="funds-tab-content tab-pane text-center fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <h2 class="display-4"><?php the_field('recurring_donations_title', get_option('page_for_posts')); ?></h2>
      <span class="lead"><?php the_field('recurring_donations_subtitle', get_option('page_for_posts')); ?> </span>
      <div class="full-button-wrapper text-center container-fluid">
        <?php
        while($query->have_posts()): $query->the_post();?>
          <?php
          if(get_field('button_size') == 'full'):
            get_template_part('templates/content', 'funds-full-button');
          endif;
        endwhile;
        wp_reset_postdata();?>
      </div>
      <div class="row no-gutters normal-button-wrapper">
        <?php
        while($query->have_posts()): $query->the_post();
          if(get_field('button_size') == 'normal'):
            get_template_part('templates/content', 'funds-normal-button');
          endif;
        endwhile;
        wp_reset_postdata()
        ?>
      </div>
    </div><!--tab-pane-->
    <?php
  $args = array(
  'post_type'		=> 'donation-page-url',
  'posts_per_page'	=> -1,
  'meta_key'		=> 'type_of_donation',
  'meta_value'	=> 'onetime'
  );
  $query = new WP_Query($args);
  ?>
    <div class="funds-tab-content text-center tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <h2 class="display-4"><?php the_field('onetime_donations_title', get_option('page_for_posts')); ?></h2>
      <span class="lead"><?php the_field('onetime_donations_subtitle', get_option('page_for_posts')); ?></span>
      <div class="full-button-wrapper text-center container-fluid">
        <?php
        while($query->have_posts()): $query->the_post();?>
          <?php
          if(get_field('button_size') == 'full'):
            get_template_part('templates/content', 'funds-full-button');
          endif;
        endwhile;
        wp_reset_postdata();?>
      </div>
      <div class="row no-gutters normal-button-wrapper">
        <?php
        while($query->have_posts()): $query->the_post();
          if(get_field('button_size') == 'normal'):
            get_template_part('templates/content', 'funds-normal-button');
          endif;
        endwhile;
        wp_reset_postdata()
        ?>
      </div>
    </div>
    <div class="funds-tab-content text-center tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <h2 class="display-4"><?php the_field('goods_donations_title', get_option('page_for_posts')); ?></h2>
      <span class="lead"><?php the_field('goods_donations_subtitle', get_option('page_for_posts')); ?> </span>
      <a  class="btn btn-lg btn-primary" href="<?php echo zaman_get_page_link('Goods'); ?>">Goods Donations</a>
    </div>
  </div>
</div>
<?php get_footer(); ?>
