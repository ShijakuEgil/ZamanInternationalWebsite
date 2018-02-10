<?php get_header( );
get_template_part( 'content', 'banner' )
?>
<!--title-component-->
<div class="container-fluid title-conponent">
  <div class="row title-row justify-content-center">
    <div class="col separator"></div>
    <div class="col-auto title">
      <h1>OUR TEAM</h1>
    </div>
    <div class="col separator"></div>
  </div>
  <p class="description">
    Nunc luctus in metus eget fringilla.
    Aliquam sed justo ligula. Vestibulum nibh erat,
    pellentesque ut laoreet vitae.
</div>
<!--title-component end-->
<div class="container-fluid our-team-container">
    <div class="row no-gutters container-fluid team-container">
<?php
      $args = array(
        'post_type' => 'team-member',
        'post_per_page' => -1,
      );
      $team_query = new WP_Query($args);
      while($team_query->have_posts()): $team_query->the_post();
?>
          <div class="col-3 team-member">
<?php         get_template_part( 'content', 'team' ); ?>
          </div>
<?php
      endwhile;
?>
    </div>
</div>
<?php get_footer( ); ?>
