<?php get_header( );
  get_template_part( 'templates/content', 'banner' );
  get_template_part( 'templates/content', 'page-title');
?>
<div class="container-fluid news-page-container">

<?php $args = array('post_type' => 'news', 'posts_per_page' => 10);
      $query = new WP_Query($args);

      if($query->have_posts() ): $i = 0;
?>
          <div class="row headline-news no-gutters">

<?php          while($query->have_posts()): $query->the_post();
?>
<?php

                    if($i == 0):
 ?>
                      <div class="col-6 large-section">

                          <div class="main-headline">
<?php                            get_template_part( 'templates/content','news' ); ?>
                          </div>
                      </div><!--large-section-->
<?php              endif;

?>
<?php              if($i == 1):
 ?>
                      <div class="col-6 mid-section ">
                            <div class="second-headline">
<?php                            get_template_part( 'templates/content','news' ); ?>
                            </div>
<?php               endif;

                    if($i == 2):
 ?>
                            <div class="row small-sections no-gutters">
                                <div class="col-6 small-section1">
<?php                                 get_template_part( 'templates/content','news' ); ?>
                                </div>
<?php               endif;

                    if($i == 3):
 ?>
                                <div class="col-6 small-section2">
<?php                                 get_template_part( 'templates/content','news' ); ?>
                                </div>

                            </div><!--samll-sections-->
                      </div><!--mid-setion-->
                    </div><!--headline-news"-->
<?php               endif;

                    if($i == 4):
?>
                    <div class="row no-gutters news-and-sidebar">
                        <div class="col-9 archive-news-section">
                            <div class="row no-gutters archive-news">
                              <div class="col-6 main-news-archive">
<?php                             get_template_part('templates/content','news'); ?>

<?php                endif;

                    if($i == 5):
                                  get_template_part('templates/content','news'); ?>
                              </div>
<?php                endif;

                    if($i == 6):
?>
                              <div class="col-6 small-news-archive">
<?php                             get_template_part('templates/content','news'); ?>

<?php               endif;

                    if( $i > 6 && $i < 9):
                      get_template_part( 'templates/content', 'news' );
                    endif;

                    if($i == 9):
                      get_template_part( 'templates/content', 'news' );
?>                             </div><!--small-news-archive-->
                            </div><!--archive-news-->
                        </div><!--archive-news-section-->
                        <!-- <div class="col-3 news-sidebar-section">
<?php                        get_sidebar(); ?>
                        </div> -->
                    </div><!--news-and-sidebar-->
<?php               endif; ?>
<?php                 $i++;
              endwhile;

              if($i < 9):?>
                    </div><!--small-news-archive-->
                  </div><!--archive-news-->
                </div><!--archive-news-section-->
                                           <!-- <div class="col-3 news-sidebar-section">
        <?php    get_sidebar(); ?>
                                           </div> -->
            </div><!--news-and-sidebar-->
        <?php endif; ?>

<?php  endif; ?>

</div><!--news-page-container-->

<?php get_footer(); ?>
