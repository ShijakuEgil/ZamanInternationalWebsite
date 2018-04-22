<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
$query = new WP_Query( array(
    'post_type'         =>      'boost_program',
    'posts_per_page'    =>      -1
    )
);
 ?>
<div class="row container-fluid no-gutters boost-body-wrapper">

    <div class="col-3 boost-col-3-wrapper">

        <div    class="nav flex-column nav-pills boost-nav-wrapper"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical">

<?php $count = 0; ?>
<?php while( $query->have_posts()): $query->the_post(); ?>
            <a  class="nav-link <?php if($count == 0): echo 'active'; endif;?> boost-nav-link"
                id="v-pills-<?php the_ID();?>-tab"
                data-toggle="pill"
                href="#v-pills-<?php the_ID();?>"
                role="tab"
                aria-controls="v-pills-<?php the_ID();?>"
                aria-selected="<?php if($count == 0 ): echo 'true'; else: echo 'false'; endif; ?>">
                <?php the_title(); ?>
            </a>
<?php $count++; endwhile; ?>
<?php rewind_posts(); ?>

        </div>

    </div>

    <div class="col-9 boost-col-9-wrapper">

        <div class="tab-content boost-tab-content" id="v-pills-tabContent">
<?php $count = 0; ?>
<?php while( $query->have_posts()): $query->the_post(); ?>
            <div class="tab-pane fade <?php if($count == 0): echo 'show active'; endif;?> boost-tab-pane rounded" id="v-pills-<?php the_ID();?>" role="tabpanel" aria-labelledby="v-pills-<?php the_ID();?>-tab">
                <?php get_template_part('templates/content', 'boost-program'); ?>
            </div>
<?php $count++; endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
