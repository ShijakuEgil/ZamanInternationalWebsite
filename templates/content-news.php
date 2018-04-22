<article id="post-<?php the_ID(); ?>" <?php post_class('news-wrapper'); ?>>

    <div class="news-image-wrapper rounded p-2" style="background-image: url('<?php echo zaman_get_featured_image() ?>')">

        <div class=" post-title-group">

            <span class=" post-credits badge badge-pill badge-dark m-0">
              Posted by <strong><?php echo get_the_author();?></strong>
              on <?php the_time('l, F jS, Y'); ?>
            </span>
            <p class="lead"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>

        </div>

    </div>

</article>
