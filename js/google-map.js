jQuery(document).ready(function( $ ) {
function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16.8,
    center: {lat: 42.295669, lng: -83.294271}
  });
  directionsDisplay.setMap(map);
  document.getElementById("directions-btn").onclick = function() {
  calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
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
});
