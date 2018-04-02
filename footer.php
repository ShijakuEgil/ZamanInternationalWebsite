  <footer class="container-fluid" >
          <?php
            wp_nav_menu( array(
              'theme_location'    => 'secondary',
              'container'         => 'div',
              'container_class'   => 'ul-container container',
            )
          );
          ?>
          <div class="contact-us container">
            <h3>Contact Us</h3>
            <div class="row contact-us-container">
              <div class="col footer-contact-us-col">
                <div class="contact-info">
                  <i class="fa fa-map-marker espacio-ico-01"> The Hope for Humanity Center</i><br />
                  <a href="#">26091 Trowbridge Inkster, MI 48141</a><br />
                  <i class="fa fa-phone espacio-ico-01"> Phone, Fax, &amp; email</i><br>
                  <span>Phone : </span><a href="#">(313) 551-3994</a><br/>
                  <span>Fax : </span> <a href="#">(313) 633-1211</a><br />
                  <span>Email : </span><a href="mailto:info@zamaninternational.org">info@zamaninternational.org</a>
                </div>
              </div>
              <div class="col footer-contact-us-col">
                <div class="contact-info">
                  <i class="fa fa-map-marker espacio-ico-01"> Client Services (BAZ)</i><br />
                  <a href="#">26091 Trowbridge Inkster, MI 48141</a><br />
                  <i class="fa fa-phone espacio-ico-01"> Phone, Fax, &amp; email</i><br>
                  <span>Phone : </span><a href="#">(313) 749-7923</a><br/>
                  <span>Fax : </span> <a href="#">(313) 633-1211</a><br />
                  <span>Email : </span><a href="mailto:info@zamaninternational.org">info@zamaninternational.org</a>
                </div>
              </div>
              <div class="col footer-contact-us-col">
                <div class="contact-info">
                  <i class="fa fa-map-marker espacio-ico-01"> Good Deeds Resale Store</i><br />
                  <a href="#">26091 Trowbridge Inkster, MI 48141</a><br />
                  <i class="fa fa-phone espacio-ico-01"> Phone, Fax, &amp; email</i><br>
                  <span>Phone : </span><a href="#">(313) 749-7923</a><br/>
                  <span>Fax : </span> <a href="#">(313) 749-7975</a><br />
                  <span>Email : </span><a href="mailto:pickups@zamaninternational.org">pickups@zamaninternational.org</a>
                </div>
              </div>
            </div><!--.row-->

            <div class="social-media">
              <h5 class="social-media-title">Follow us on social media!</h5>
              <?php // TODO: insert url values for social media anchors to call contact us page ?>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="footer-logo container-fluid">
              <img src="<?php echo get_template_directory_uri();?>/img/logo-o.png" width="140" height="100" alt="">
            </div>
            <p class="copyright">Zaman International © 2017</p>
        </div><!--.contact-us-->
      </footer>
  </body>
      <?php wp_footer(); ?>
</html>
