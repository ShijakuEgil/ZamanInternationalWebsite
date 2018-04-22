<?php get_header( );
  get_template_part( 'templates/content', 'banner' );
  get_template_part( 'templates/content', 'page-title');
  $args = array('post_type' => 'news', 'posts_per_page' => 10);
  $query = new WP_Query($args);
  ?>

<div class="news-body-wrapper container-fluid m-0 p-5">

    <?php if( $query->have_posts() ): $i = 0; ?>

        <?php while( $query->have_posts() ): $query->the_post(); ?>

            <?php if( $i == 0 ): ?>
    <div class="row news-row-wrapper m-0 p-0">

        <div class="col-6 first-news m-0 p-0">
            <?php get_template_part( 'templates/content', 'news'); ?>
        </div>
            <?php endif; ?>

            <?php if ( $i == 1 ): ?>
        <div class="col-6 two-four-news-wrapper m-0 p-0">

            <div class="second-news m-0 p-0">
                <?php get_template_part( 'templates/content', 'news'); ?>
            </div>
            <?php endif; ?>


            <?php if ( $i == 2 ): ?>
            <div class="three-four-news-wrapper row no-gutters m-0 p-0">

                <div class="col-6 third-news m-0 p-0">
                    <?php get_template_part( 'templates/content', 'news'); ?>
                </div>
            <?php endif; ?>

            <?php if ( $i == 3 ): ?>
                <div class="col-6 fourth-news m-0 p-0">
                    <?php get_template_part( 'templates/content', 'news'); ?>
                </div>
            </div>
        </div>
    </div>
            <?php endif; ?>
            <?php if ( $i == 4 ): ?>
    <div class="row no-gutters news-sidebar-wrapper container-fluid m-0 p-0">

        <div class="col-9 five-ten-wrapper m-0 p-0">

            <div class="row no-gutters five-ten-row-wrapper m-0 p-0">

                <div class="col-6 five-six-wrapper container-fluid m-0 p-0">
                    <?php get_template_part( 'templates/content', 'news'); ?>
            <?php endif; ?>
            <?php if ( $i == 5 ): ?>
                    <?php get_template_part( 'templates/content', 'news'); ?>
                </div>
            <?php endif; ?>
            <?php if ( $i == 6 ): ?>
                <div class="col-6 seven-ten-wrapper container-fluid m-0 p-0">
                    <?php get_template_part( 'templates/content', 'news'); ?>
            <?php endif; ?>
            <?php if ( $i > 6 && $i < 9 ): ?>
                    <?php get_template_part( 'templates/content', 'news'); ?>
            <?php endif; ?>
            <?php if ( $i == 9 ): ?>
                    <?php get_template_part( 'templates/content', 'news'); ?>
                </div>
            </div>
        </div>
        <div class="col-3 sidebar-wrapper rounded text-center">

            <h1 class="text-light text-center"><?php the_field('category_title', get_id_by_slug( 'newsp' ) ); ?></h1>

            <div class="categories-wrapper container-fluid ">

                <ul class="bycategories">
                  <?php wp_list_categories('title_li=');?>
                </ul>

            </div>

            <h1 class="container-fluid text-light text-center"><?php the_field('get_involved_title', get_id_by_slug( 'newsp' ) ); ?></h1>

            <div class="btn-group-vertical w-50 news-get-involved-btns">
                <button onclick="window.location='<?php the_field('top_button_page_link', get_id_by_slug( 'newsp' ) ); ?>';" type="button" class="btn  btn-light"><?php the_field( 'top_button_text', get_id_by_slug( 'newsp') ); ?></button>
                <button onclick="window.location='<?php the_field('middle_button_page_link', get_id_by_slug( 'newsp' ) ); ?>';" type="button" class="btn btn-light"><?php the_field( 'middle_button_text', get_id_by_slug( 'newsp') ); ?></button>
                <button onclick="window.location='<?php the_field('bottom_button_page_link', get_id_by_slug( 'newsp' ) ); ?>';" type="button" class="btn btn-light"><?php the_field( 'bottom_button_text', get_id_by_slug( 'newsp') ); ?></button>
            </div>
        </div>
    </div>
            <?php endif; ?>

        <?php $i++; ?>
        <?php endwhile; ?>

    <?php endif; ?>

</div>
<?php get_footer(); ?>
