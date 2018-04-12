<?php
/*
 * Template Name: Gallery
 * Template Post Type: gallery-photo
 */
get_header();
get_template_part('templates/content', 'banner');
get_template_part('templates/content', 'page-title');
?>
<?php if ( have_posts() ):?>

  <?php while ( have_posts() ): the_post();?>

     <article id="post-<?php the_ID();?>" <?php post_class("gallery-single-wrapper mb-5 p-5 "); ?>>
         <?php $images = acf_photo_gallery('album_images', $post->ID);
         if( count( $images ) ): ?>
        <div id="galleryWrapper" class="gallery d-flex justify-content-center align-items-center">
            <?php foreach($images as $image):
                $id = $image['id'];
                $title = $image['title'];
                $caption = $image['caption'];
                $description = $image['description'];
                $full_image_url = $image['full_image_url'];
                // $full_image_url = acf_photo_gallery_resize_image($full_image_url,262, 160); //Resized size to 262px width by 160px height image url
                $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                $url= $image['url']; //Goto any link when clicked
                $target= $image['target']; //Open normal or new tab
                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                $class = get_field('photo_gallery_class', $id);
            ?>

            <a  id="mainImage" class="gallery-item"
                href="<?php echo $full_image_url;?>"
                data-lightbox="image-<?php the_ID();?>"
                data-title="<?php echo $title; ?>"
                data-alt="<?php echo $alt; ?>"
                style="background-image: url('<?php echo $full_image_url; ?>')">
                <img src="<?php echo $full_image_url; ?>"/>
            </a>

        <?php endforeach; ?>
        </div>
    <?php endif; ?>
    </article>

  <?php endwhile; ?>

<?php endif; ?>

<?php
get_footer(); ?>
