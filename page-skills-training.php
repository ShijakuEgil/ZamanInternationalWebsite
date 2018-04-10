<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>
<div class="container-fluid">

  <nav>
  <!-- <div class="nav nav-tabs" id="nav-tab" role="tablist"> -->
    <ul class="nav nav-tabs nav-justified" id="fundsTab" role="tablist">
      <li class="funds-nav-item nav-item">
        <a class="funds-nav-link nav-link active display-4" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Literacy Program</a>
      </li>
      <li class="funds-nav-item nav-item">
        <a class="funds-nav-link nav-link display-4" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Culinary Center</a>
      </li>
      <li class="funds-nav-item nav-item">
        <a class="funds-nav-link nav-link display-4" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Kitchen Program</a>
      </li>
    </ul>
  <!-- <?php
  $args = array(
    'post_type' => 'boost-post',
    'post_per_page' => -1
  );

  $query = new WP_Query($args);

  $k = 0;
  while($query->have_posts()):$query->the_post();?>

  <a class="nav-item nav-link <?php if($k == 0){ echo 'active'; }?>"  data-toggle="tab" href="#team-modal-<?php the_ID();?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php the_title(); ?></a>
  <?php $k++;
        endwhile;
  ?> -->


  <!-- </div> -->
</nav>
  <div class="tab-content" id="nav-tabContent">
<div class="funds-tab-content tab-pane text-center fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="content container-fluid row">
  <img src="<?php echo get_template_directory_uri();?>/img/desk.jpg" class="left col-lg-6"/>
  <p class="col-lg-6">
  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
  when an unknown printer took a galley of type and scrambled it to make a type
  specimen book. It has survived not only five centuries, but also the leap into
  electronic typesetting, remaining essentially unchanged. It was popularised in the
  1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
  recently with desktop publishing software like Aldus PageMaker including versions of
  Lorem Ipsum.
  </p>
</div>
</div>

<div class="funds-tab-content tab-pane text-center fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="content container-fluid row">
  <img src="<?php echo get_template_directory_uri();?>/img/office-front.jpeg" class="left col-lg-6"/>
  <p class="col-lg-6">
  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
  when an unknown printer took a galley of type and scrambled it to make a type
  specimen book.
  </p>
</div>
</div>

<div class="funds-tab-content tab-pane text-center fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <div class="content container-fluid row">
  <img src="<?php echo get_template_directory_uri();?>/img/building.jpg" class="left col-lg-6"/>
  <p class="col-lg-6">
  Lorem Ipsum has survived not only five centuries, but also the leap into
  electronic typesetting, remaining essentially unchanged. It was popularised in the
  1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
  recently with desktop publishing software like Aldus PageMaker including versions of
  Lorem Ipsum.
  </p>
</div>
</div>

<!-- <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Donate Goods</button>
  <button type="button" class="btn btn-secondary">Donate Funds</button>
  <button type="button" class="btn btn-secondary">Wishlist</button>
  <button type="button" class="btn btn-secondary">Volunteer</button>
</div> -->

<!-- <?php
      $k = 0;
      while($query->have_posts()):$query->the_post();?>

    <div class="tab-pane fade <?php if($k == 0){ echo 'show active'; }?>" id="team-modal-<?php the_ID();?>" role="tabpanel" aria-labelledby="nav-home-tab">

      <div class="tab-image" style="background-image: url(<?php echo zaman_get_featured_image(); ?>)"> </div>
    </div>
      <?php $k++;
            endwhile; ?>
    </div> -->
</div>


<?php get_footer() ?>
