<article class="col-4 funds-link-wrapper"
          data-toggle="tooltip"
          data-placement="top"
          data-html="true"
          title='<p class="h1">
                    <?php the_field("name_of_department");?>
               </p>
               <p class="lead">
                    <?php the_field("tool_tip_description")?>
               </p>'
          id="post-<?php the_ID(); ?>" <?php post_class();?>>
         <a class="funds-donation-link" href="<?php the_field('donation_page_url');?>">
           <div class="funds-donation-button"
                style="background-image: url('<?php echo zaman_get_featured_image();?>')">
              <h2><?php the_field('name_of_department') ?></h2>
           </div>
         </a>
</article>
