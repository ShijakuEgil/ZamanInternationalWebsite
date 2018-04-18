<article id="post-<?php the_ID(); ?>" <?php post_class('news-wrapper'); ?>>

  <div class="news-image-wrapper rounded" style="background-image: url('<?php echo zaman_get_featured_image() ?>')">

      <div class=" post-title-group">

      <span class=" post-credits badge badge-pill badge-dark">
          Posted by <strong><?php echo get_the_author();?></strong>
          on <?php the_time('l, F jS, Y') ?>
      </span>
        <?php the_title( sprintf('<h1 class="post-title text-left"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

      </div>

  </div>

</article>
