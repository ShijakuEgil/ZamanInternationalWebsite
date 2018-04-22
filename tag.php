<?php
get_header();
get_template_part('templates/content', 'page-title');
$tag_id = get_queried_object()->term_id;

$blog_loop = new WP_Query(array(
      'post_type'   => 'blog-post',
      'posts_per_page' => -1,
      'tag_id'      => $tag_id
) );
?>
<div class="tag-archive-body-wrapper w-100 d-flex flex-wrap">



    <?php
    while($blog_loop->have_posts() ) : $blog_loop->the_post(); ?>
        <div class="tag-archive-single-wrapper">

        <?php get_template_part( 'templates/content', 'blog' ); ?>

        </div>
    <?php endwhile;?>



</div>

<?php get_footer() ?>
