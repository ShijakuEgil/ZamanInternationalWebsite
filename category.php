<?php
get_header();
get_template_part( 'templates/content', 'page-title');

// NOTE: @author Egil Shijaku
// NOTE: @package ZamanInternational
// NOTE: Category page for the news page.


 $cat_query = new WP_Query(array(
     'post_type'        =>      'news',
     'posts_per_page'   =>      -1,
     'cat'              =>      $cat
 ));
if ($cat_query->have_posts() )
{
    ?>
<div class="row category-row-wrapper no-guters container-fluid">
    <?php
    while($cat_query->have_posts())
    {
        $cat_query->the_post();
?>
<div class="col-3 category-col-wrapper">

<?php
        get_template_part( 'templates/content', 'news');
?>
</div>
<?php
    }
    ?>
</div>
<?php
}
 ?>
 <?php get_footer();
