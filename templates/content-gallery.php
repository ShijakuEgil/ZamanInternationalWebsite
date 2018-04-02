<?php
// get the Gallery images and diplay them in the front end 
?>
<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
  <?php

    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('image', $post->ID);
    //Check if return array has anything in it
    if( count($images) ): //Cool, we got some data so now let's loop over it?>
  <?php $nr_of_images = count($images);
        $current_img_nr = 1;
        ?>
      <!-- Slideshow container -->
    <div class="container">

    <?php foreach($images as $image):

            $id = $image['id']; // The attachment id of the media
          //  $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            // $full_image_url = acf_photo_gallery_resize_image($full_image_url,262, 160); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
        ?>
      <!-- Full-width images with number and caption text -->
      <div class="mySlides">
        <div class="numbertext"><?php echo $current_img_nr; ?> / <?php echo $nr_of_images; ?></div>
        <img src="<?php echo $full_image_url; ?>" style="width:100%">
        <!-- <div class="text">Caption Text</div> -->
      </div>
      <?php $current_img_nr++; ?>
      <?php endforeach; ?>

          <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <!-- </div> -->

  <!-- Image text -->
   <div class="caption-container">
     <p id="caption"></p>
   </div>
  <!-- <br> -->
  <div class="row no-gutters">
    <?php $k = 1;  ?>
    <?php foreach($images as $image):
      $id = $image['id']; // The attachment id of the media
      $title = $image['title']; //The title
      $caption= $image['caption']; //The caption
      $full_image_url= $image['full_image_url']; //Full size image url
      $full_image_url = acf_photo_gallery_resize_image($full_image_url,262, 160); //Resized size to 262px width by 160px height image url
      $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
      ?>
      <!-- Thumbnail images -->

        <div class="column">
          <img class="demo cursor" src="<?php echo $thumbnail_image_url?>" style="width:100%" onclick="currentSlide(<?php echo $k;?>)" alt="<?php echo $caption; ?>">
        </div>

      <?php $k++; endforeach; ?>
    </div>

  </div>
<?php endif; // count($images) ?>
</article>
