<article id="post-<?php the_ID();?>" <?php post_class('col-3 humanity-col'); ?>>

    <div class="humanity-post-image" style="background-image: url('<?php echo zaman_get_featured_image() ?>')">

      <div class="humanity-post-title">
        <?php the_title( sprintf('<h2 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
      </div>

    </div>

</article>
