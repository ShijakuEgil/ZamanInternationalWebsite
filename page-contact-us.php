<?php get_header();?>
<div class="contact-us-container">
  <div class="btn-group" role="group" aria-label="Basic example">
    <button id="address-btn"type="button" onClick="rightSideNav()" class="btn btn-secondary"><i class="fa fa-chevron-left"></i> Phone/Fax</button>
    <button id="direction-btn"type="button" onClick="directionNav()" class="btn btn-secondary">Directions</button>
    <button id="email-btn" type="button" onClick="leftSideNav()" class="btn btn-secondary">Email <i class="fa fa-chevron-right"></i></button>
  </div>
  <div id="floating-panel" class="row direction-pannel">
    <input id="directions-input" type="text" class="col-8 form-control" placeholder="Your Address" required>
    <button id="directions-btn"type="button" name="button" class="col-4 btn btn-secondary">Get Directions</button>
  </div>
  <div id="map" class="contact-us-map"></div>
  <div id=content>
      <img src="<?php echo get_template_directory_uri();?>/img/logo-hope.png" width="300" height="170" alt="logo"></img>
  </div>
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
<!-- <script>
function myMap() {
  var myCenter = new google.maps.LatLng(42.294226,-83.293490);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 17};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content: "<img src='<?php //echo get_template_directory_uri();?>/img/logo-hope.png' width='210' height='110' alt=''><br />"+
              "<h6>26091 Trowbridge</h6>"+
               "<h6>Inkster, MI 48141</h6>"
  });
  infowindow.open(map,marker);
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBesoH9bG8c55GvG1umLf8W-jzkMD_5KHA&callback=myMap">

</script> -->


<!-- <div class="map-div" style="width: 100%; height:100vh;">
  <iframe width="100%" height="800px"
  src="https://maps.google.com/maps?width=100%&amp;height=800&amp;hl=en&amp;q=26091%20Trowbridge%20%20Inkster%2C%20MI%2048141+(Zaman%20International)&amp;ie=UTF8&amp;t=h&amp;z=18&amp;iwloc=B&amp;output=embed"
  frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
  <a href="https://www.maps.ie/create-google-map/">Create Google Map</a>
</iframe>
</div> -->
<script>
var map, popup, Popup;

  function initMap() {
    //definePopupClass();
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
  /** Defines the Popup class. */
// function definePopupClass() {
//   /**
//    * A customized popup on the map.
//    * @param {!google.maps.LatLng} position
//    * @param {!Element} content
//    * @constructor
//    * @extends {google.maps.OverlayView}
//    */
//   Popup = function(position, content) {
//     this.position = position;
//     content.classList.add('popup-bubble-content');
//
//     var pixelOffset = document.createElement('div');
//     pixelOffset.classList.add('popup-bubble-anchor');
//     pixelOffset.appendChild(content);
//
//     this.anchor = document.createElement('div');
//     this.anchor.classList.add('popup-tip-anchor');
//     this.anchor.appendChild(pixelOffset);
//
//     // Optionally stop clicks, etc., from bubbling up to the map.
//     this.stopEventPropagation();
//   };
//   // NOTE: google.maps.OverlayView is only defined once the Maps API has
//   // loaded. That is why Popup is defined inside initMap().
//   Popup.prototype = Object.create(google.maps.OverlayView.prototype);
//
//   /** Called when the popup is added to the map. */
//   Popup.prototype.onAdd = function() {
//     this.getPanes().floatPane.appendChild(this.anchor);
//   };
//
//   /** Called when the popup is removed from the map. */
//   Popup.prototype.onRemove = function() {
//     if (this.anchor.parentElement) {
//       this.anchor.parentElement.removeChild(this.anchor);
//     }
//   };
//
//   /** Called when the popup needs to draw itself. */
//   Popup.prototype.draw = function() {
//     var divPosition = this.getProjection().fromLatLngToDivPixel(this.position);
//     // Hide the popup when it is far out of view.
//     var display =
//         Math.abs(divPosition.x) < 4000 && Math.abs(divPosition.y) < 4000 ?
//         'block' :
//         'none';
//
//     if (display === 'block') {
//       this.anchor.style.left = divPosition.x + 'px';
//       this.anchor.style.top = divPosition.y + 'px';
//     }
//     if (this.anchor.style.display !== display) {
//       this.anchor.style.display = display;
//     }
//   };
//
//   /** Stops clicks/drags from bubbling up to the map. */
//   Popup.prototype.stopEventPropagation = function() {
//     var anchor = this.anchor;
//     anchor.style.cursor = 'auto';
//
//     ['click', 'dblclick', 'contextmenu', 'wheel', 'mousedown', 'touchstart',
//      'pointerdown']
//         .forEach(function(event) {
//           anchor.addEventListener(event, function(e) {
//             e.stopPropagation();
//           });
//         });
//   };
// }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBesoH9bG8c55GvG1umLf8W-jzkMD_5KHA&callback=initMap">
</script>
<?php get_footer(); ?>
