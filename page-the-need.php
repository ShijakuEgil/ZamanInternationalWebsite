<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title');
?>
<?php
$args = array(
     'post_type' => 'the-need-post',
     'posts_per_page'=> -1
);

     $query = new WP_Query($args);
?>
<div class="the-need-wrapper container-fluid p-5">
     <?php
     $k = 0;
     while($query->have_posts()): $query->the_post();

          if($k % 2 == 0){
               get_template_part( 'templates/content', 'need-left' );
          }
          else{
               get_template_part( 'templates/content', 'need-right');
          }
    $k++; endwhile;
     ?>
</div>
<?php get_footer(); ?>
