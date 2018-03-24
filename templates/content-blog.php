<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="row blog-post-wrapper">

      <div class="col-3 blog-post-image" style="background-image: url('<?php echo zaman_get_featured_image(); ?>')"></div>

      <div class="col-9 blog-post-content">

        <div class="blog-title-excerpt">

          <?php the_title( sprintf('<h1 class="blog-post-title"><a class="blog-title-link" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
          <?php the_excerpt(); ?>
        </div>
        <div class="blog-credits">
          <small class="blog-post-credits"><i class="fa fa-pencil"></i>Posted by <strong><?php echo get_the_author();?></strong> on <?php the_time('l, F jS, Y') ?>
              <span class="tags"><?php the_tags('<i class="fa fa-tags"></i>',' / ') ?></span>
          </small>
          <hr>
      </div>
    </div>
  </div>
</article>
