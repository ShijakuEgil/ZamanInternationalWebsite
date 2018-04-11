<article id="post-<?php the_ID();?>" <?php post_class('right-article container-fluid text-center'); ?> >
     <div class="title-wrapper container-fluid">
          <p class="display-4"><?php the_field('title'); ?></p>
     </div>
      <div class="the-need-right-info-wrapper row no-gutters container-fluid">
        <div class="the-need-right-post-info col-7 p-5 text-justify">
            <?php the_field('post_info'); ?>
        </div>
        <div class="the-need-right-post-image col-5" style="background-image: url('<?php echo zaman_get_featured_image() ?>')"> </div>
      </div>
</article>
