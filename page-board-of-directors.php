<?php get_header( );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title');
?>

<div class="container-fluid our-team-container">
    <div class="row no-gutters container-fluid team-container">
<?php
      $args = array(
        'post_type' => 'team-members',
        'post_per_page' => -1,
      );
      $k = 0;
      $team_query = new WP_Query($args);
      while($team_query->have_posts()): $team_query->the_post();
      if(get_field('member_board_team') == 'board'):
?>
      <div class="col-4 team-member">
<?php
          get_template_part( 'templates/content', 'team' );
?>
      </div>

      <div class="modal fade" id="team-modal-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row team-modal-content">
                <?php
                  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
                ?>
                <div class="col-6 modal-image-container container-fluid" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
                </div>
                <div class="col-6 team-member-info">
                  <button type="button" class="btn-close btn-primary" data-dismiss="modal"><i class="fa fa-times"></i></button>
                  <h1 class="modal-name"><?php the_field('member_name'); ?></h1>
                  <h3 class="modal-job-title"><?php the_field('member_position_title'); ?></h3>
                  <hr>
                  <div class="member-info-container">
                    <p><?php the_field('member_description'); ?></p>
                  </div>
                  <form class="modal-button-group" action="mailto:<?php the_field('member_email');?>" method="post" enctype="text/plain">
                      <button type="submit" class="btn btn-primary"><i class="fa fa"></i>Email</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
      endif;
      $k++;
      endwhile;
?>
  </div>
</div>


<?php get_footer( ); ?>
