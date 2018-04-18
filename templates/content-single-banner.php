
    <div class="single-post-image" style="background-image: url('<?php echo zaman_get_featured_image()?>')">
      <?php if(get_post_type() == 'news'): ?>
           <h1 class="single-page-brand">Zaman | <b>News</b></h1>
      <?php elseif(get_post_type() == 'event'): ?>
          <h1 class="single-page-brand">Zaman | <b>Calendar</b></h1>
      <?php elseif(get_post_type() == 'blog-post '): ?>
          <h1 class="single-page-brand">Zaman | <b>Blog</b></h1>
      <?php elseif(get_post_type() == 'job_openings '): ?>
          <h1 class="single-page-brand">Zaman | <b>Employement</b></h1>
      <?php endif; ?>
    </div>
