<?php get_header();?>
<div class="contact-us-container">

  <div class="contact-us-btn-group container-fluid" role="group" aria-label="Basic example">
    <button id="address-btn"type="button" onClick="rightSideNav()" class="btn btn-lg btn-dark"><i class="fa fa-chevron-left"></i> Phone/Fax</button>
    <button id="direction-btn"type="button" onClick="directionNav()" class="btn btn-lg btn-dark">Directions</button>
    <button id="email-btn" type="button" onClick="leftSideNav()" class="btn btn-lg btn-dark">Email <i class="fa fa-chevron-right"></i></button>
  </div>

  <div id="floating-panel" class="row direction-pannel d-flex">
    <input id="directions-input" type="text" class="col-8 form-control" placeholder="Your Address" required>
    <button id="directions-btn"type="button" name="button" class="col-4 btn btn-secondary">Get Directions</button>
  </div>

  <div id="map" class="contact-us-map"></div>

  <div class="sidenav-left" id="phone-fax-address">

      <h3>Phone|Fax|Address</h3>
      <h4>Contact Us Today!</h4>
      <div class="department-info">
  <?php
        $args = array(
          'post_type' => 'contact-us-dpt',
          'post_per_page' => -1,
        );

        $query = new WP_Query($args);
        while($query->have_posts()):$query->the_post();
        $location = get_field('address');
   ?>

          <h2 class="department-name"><?php the_title(); ?></h2>
          <a class="department-phone" href="+1<?php the_field('phone');?>"><i class="fa fa-phone-square"></i><?php the_field('phone');?></a>
          <a class="department-fax" href="+1<?php the_field('fax');?>"><i class="fa fa-fax"></i><?php the_field('fax');?></a>
          <?php if(!empty($location)): ?>
          <p class=department-address><i class="fa fa-map-marker"></i><?php echo $location['address']; ?></p>
  <?php
        endif;
  ?>
  <hr>
  <?php
        endwhile;
  ?>
        </div>

  </div>

<div class="sidenav-right" id="email">
    <h3>Email</h3>
    <h4>Contact Us Today!</h4>
    <form method="post" action="email.php" class="needs-validation" novalidate >
      <div class="form-group">
        <div class="input-group">
          <input name="fname" type="text" class="form-control" placeholder="First Name"required >
          <div class="valid-tooltip">
            Looks Good!
          </div>
          <div class="invalid-tooltip">
            Please enter your name!
          </div>
        </div>
        <div class="input-group">
          <input name="lname" type="text" class="form-control" placeholder="Last Name" required>
          <div class="valid-tooltip">
            Looks Good!
          </div>
          <div class="invalid-tooltip">
            Please enter your last name!
          </div>
        </div>
        <div class="input-group">
          <input name="email" type="email" class="form-control" placeholder="Email"required>
          <div class="valid-tooltip">
            Looks Good!
          </div>
          <div class="invalid-tooltip">
            Please enter a valid email!
          </div>
        </div>
        <div class="input-group">
          <select class="form-control" id="exampleFormControlSelect1"placeholder="Select a Department." required>
            <option value="" selected disabled>Select a department...</option>
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
          <div class="valid-tooltip">
            Looks Good!
          </div>
          <div class="invalid-tooltip">
            Please select a department!
          </div>
        </div>
        <div class="input-group">
          <textarea name="inquiry" class="form-control" aria-label="Inquiry" placeholder="Message"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>
</div>
<script>
var map, popup, Popup;

  function initMap() {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17.6,
      center: {lat:42.295000, lng: -83.293536},
      mapTypeId: 'satellite'
    });

    directionsDisplay.setMap(map);
    document.getElementById("directions-btn").onclick = function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
    };
    popup = new Popup(
      new google.maps.LatLng(42.295000,-83.293536),//42.294226, -83.29349),
      document.getElementById('content')
    );
    popup.setMap(map);
  }

  function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    directionsService.route({
      origin:         document.getElementById('directions-input').value,
      destination:    "26091 Trowbridge Street, Inkster, MI 48141, USA",//document.getElementById('end').value,
      travelMode:     'DRIVING'
    }, function(response, status) {
      if (status === 'OK') {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  }
// AIzaSyBesoH9bG8c55GvG1umLf8W-jzkMD_5KHA


</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_6oZOskYt1IaUHzjhewzivrDtqFgj9QA&callback=initMap">
</script>
<?php get_footer(); ?>
