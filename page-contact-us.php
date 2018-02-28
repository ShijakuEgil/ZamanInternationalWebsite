<?php get_header();?>

<div class="contact-us-container">
<div id="googleMap" class="contact-us-map"></div>
<div class="sidenav-close" id="mydiv">
  <div class="close-container">
      <i class="fa fa-arrow-circle-right" onClick="sideNav()"></i>
  </div>
  <div class="row no-gutters sidenav-phone-fax-container">
    <div class="col-10">
<?php
      $args = array(
        'post_type' => 'contact-us-dpt',
        'post_per_page' => -1,
      );
      $query = new WP_Query($args);
      while($query->have_posts()):$query->the_post();
 ?>
      <div class="department-container">
        <h1><?php the_title(); ?></h1>
        <a href="+1<?php the_field('phone');?>"><?php the_field('phone');?></a><br />
        <a href="+1<?php the_field('fax');?>"><?php the_field('fax');?></a>
      </div>
<?php
      endwhile;
?>

    </div>
    <div class="col-2 side-note">
      <div class="text-container">
              <h1 class="vertical-text">Phone/Fax</h1>
      </div>
    </div>
  </div>
</div>
<div class="contact-us-email" >
    <h3>Email</h3>
    <h4>Contact us today!</h4>
    <form method="post" action="email.php" class="needs-validation" novalidate >
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="">First Name</span>
          </div>
          <input name="fname" type="text" class="form-control" required >
          <div class="valid-feedback">
            <i class="fa fa-thumbs-up"></i>
          </div>
          <div class="invalid-feedback">
            Please enter your name!
          </div>
        </div>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id=""> Last Name</span>
          </div>
          <input name="lname" type="text" class="form-control" required>
          <div class="valid-feedback">
            <i class="fa fa-thumbs-up"></i>
          </div>
          <div class="invalid-feedback">
            Please enter your last name!
          </div>
        </div>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="">Your Email</span>
          </div>
          <input name="email" type="email" class="form-control" required>
          <div class="valid-feedback">
            <i class="fa fa-thumbs-up"></i>
          </div>
          <div class="invalid-feedback">
            Please enter a valid email!
          </div>
        </div>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="">Select a Department</span>
          </div>
          <select class="form-control" id="exampleFormControlSelect1"placeholder="Select a Department." required>
            <option value="" selected disabled>Choose...</option>
<?php
            $args = array(
              'post_type' => 'contact-us-dpt',
              'post_per_page' => -1,
            );
            $contact_us_query = new WP_Query($args);
            while($contact_us_query->have_posts()):$contact_us_query->the_post();
 ?>
            <option value="<?php the_field('email');?>"><?php the_title(); ?></option>
 <?php
            endwhile;
?>
          </select>
          <div class="valid-feedback">
            <i class="fa fa-thumbs-up"></i>
          </div>
          <div class="invalid-feedback">
            Please select a department!
          </div>
        </div>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Inquiry</span>
          </div>
          <textarea name="inquiry" class="form-control" aria-label="Inquiry"></textarea>
        </div>

      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(42.294226,-83.293490);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 17};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content: "<img src='<?php echo get_template_directory_uri();?>/img/logo-hope.png' width='210' height='110' alt=''><br />"+
              "<h6>26091 Trowbridge</h6>"+
               "<h6>Inkster, MI 48141</h6>"
  });
  infowindow.open(map,marker);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBesoH9bG8c55GvG1umLf8W-jzkMD_5KHA&callback=myMap"></script>


<!-- <div class="map-div" style="width: 100%; height:100vh;">
  <iframe width="100%" height="800px"
  src="https://maps.google.com/maps?width=100%&amp;height=800&amp;hl=en&amp;q=26091%20Trowbridge%20%20Inkster%2C%20MI%2048141+(Zaman%20International)&amp;ie=UTF8&amp;t=h&amp;z=18&amp;iwloc=B&amp;output=embed"
  frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
  <a href="https://www.maps.ie/create-google-map/">Create Google Map</a>
</iframe>
</div> -->
<?php get_footer(); ?>
