<?php



get_header( );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title');
$blog_loop = new WP_Query(array(
      'post_type'   => 'blog-post',
      'posts_per_page' => 5,
      'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1)
);
?>

<div class="row w-100 m-0 px-5 no-gutters blog-body-wrapper">

    <div class="col-9 w-100 blog-posts-wrapper pr-5">
        <?php
        while($blog_loop->have_posts() ) : $blog_loop->the_post(); ?>

            <?php get_template_part( 'templates/content', 'blog' ); ?>

        <?php endwhile;?>

    </div>
    <div class="col-3 sidebar-wrapper rounded text-center">

        <h1 class="text-center w-100">Blog Tags</h1>
        <div class="blog-sidebar-tags-wrapper text-center">
            <?php
            $tags = get_tags();
            $html = '<div class="post_tags">';
            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );

                $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                $html .= "{$tag->name}</a>";
            }
            $html .= '</div>';
            echo $html;
            ?>
        </div>

        <h1 class="text-center mt-5"><?php the_field( 'get_involved_title', get_id_by_slug( 'blog' ) ); ?></h1>

        <div class="calendar-btn-group btn-group-vertical w-75" role="group" aria-label="Basic example">
          <button   onclick="window.location='<?php the_field('top_button_page_link', get_id_by_slug( 'blog' ) ); ?>';" type="button" class="btn btn-lg btn-light"><?php the_field( 'top_button_text', get_id_by_slug( 'blog') ); ?></button>
          <button onclick="window.location='<?php the_field('middle_button_page_link', get_id_by_slug( 'blog' ) ); ?>';" type="button" class="btn btn-lg btn-light"><?php the_field( 'middle_button_text', get_id_by_slug( 'blog') ); ?></button>
          <button onclick="window.location='<?php the_field('bottom_button_page_link', get_id_by_slug( 'blog' ) ); ?>';" type="button" class="btn btn-lg btn-light"><?php the_field( 'bottom_button_text', get_id_by_slug( 'blog') ); ?></button>
        </div>
	</div>
</div>
<!-- <div class="pagination">
    <?php// $big = 999999999;
   //  echo paginate_links( array (
   //     'base' => str_replace( $big, '%#%',get_pagenum_link($big) ),
   //     'format' => '?paged=%#%',
   //     'current'=> max(1 , get_query_var('paged') ),
   //     'total' => $blog_loop->max_num_pages
   // ) );
?>
</div> -->
<?php get_footer(); ?>
