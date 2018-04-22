  <footer class="container-fluid" >
          <?php
            wp_nav_menu( array(
              'theme_location'    => 'secondary',
              'container'         => 'div',
              'container_class'   => 'ul-container container-fluid',
            )
       );
       ?>
          <div class="contact-us container-fluid ">

            <div class="row container-fluid contact-us-container no-gutters justify-content-center">
            <div class="header container-fluid">
                 <a class="contact-us-header" href="<?php echo zaman_get_page_link('Contact Us');?>">Contact Us</a>
            </div>
          <?php
          $args = array(
               'post_type'    =>   'contact-us-dpt',
               'post_per_page'=>   -1
          );

          $query = new WP_Query( $args );

          while( $query->have_posts()):$query->the_post();
            $location = get_field('address');
            ?>
              <div class="col-auto footer-contact-us-col">
                <div class="contact-info">
                     <p class="lead"><?php the_title(); ?></p>

                     <div class="contact-us-address row">
                          <i class="fa fa-map-marker col-sm-5 text-left"></i>
                          <p class="col-sm-7 text-right"><?php echo $location['address']; ?></P>
                     </div>
                     <div class="conatact-us-phone row ">
                          <i class="fa fa-phone col-5 text-left" aria-hidden="true"></i>
                          <p class="col-7 text-right"><?php the_field('phone'); ?></p>
                     </div>
                     <div class="contact-us-fax row">
                          <i class="fa fa-fax col-5 text-left" aria-hidden="true"></i>
                          <p class="col-7 text-right"><?php the_field('fax'); ?></p>
                     </div>
                     <div class="contact-us-email row">
                          <i class="fa fa-envelope-o col-5 text-left" aria-hidden="true"></i>
                          <a class="col-7 text-right text-light" href="mailto:<?php the_field('email');?>"><p><?php the_field('email'); ?></p></a>
                     </div>
                </div>
              </div>
         <?php endwhile; ?>
            </div><!--.row-->

            <?php // TODO: connect the social media  ?>

            <div class="social-media">
              <p class="lead social-media-title">Follow us on social media!</p>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="footer-logo container-fluid">
              <img src="<?php echo get_template_directory_uri();?>/img/logo-o.png" width="140" height="100" alt="">
            </div>
            <p class="copyright"><?php bloginfo('name'); ?> © 2017</p>
        </div><!--.contact-us-->
      </footer>
  </body>
      <?php wp_footer(); ?>
</html>
