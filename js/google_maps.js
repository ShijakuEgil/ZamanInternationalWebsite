
var markers = [];
var tempLocations = [];
var locations;


(function($) {

	function initialize_map(locations_json){

		var latlng = new google.maps.LatLng(42.321152, -85.179714); // map centering at Battle Creek MI
		var myOptions = {
			zoom:				10,
			center:			latlng,
			mapTypeId:	google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

		var bounds = new google.maps.LatLngBounds();
		for (var i = 0; i < locations_json.length; i++ ){
			addMarker(locations_json[i], map, bounds);
		}

		if(locations_json.length > 1){
			map.fitBounds(bounds);
		}
	}

	var infowindow = new google.maps.InfoWindow();

	function addMarker( location, map, bounds ) {

		var contentString =    ' <img style="float:left; width:200px; margin-top:30px" src="'+ location.marker_icon + '">'+
    												'	<div style="margin-left:220px; margin-bottom:20px;">'+
      												'<h2>'+location.loc_name +'</h2><p>'+location.address+'</p>' +
      												'<p><img src="https://maps.googleapis.com/maps/api/streetview?size=350x120&location='+ location.latitude +','+ location.longitude +'&key=AIzaSyA_6oZOskYt1IaUHzjhewzivrDtqFgj9QA"></p>'+
    												'</div>';

		var locationLatLng = new google.maps.LatLng(location.latitude, location.longitude);
		bounds.extend(locationLatLng);

		var marker = new google.maps.Marker({
			position:		locationLatLng,
			map:				map,
			title:			location.location_name,
			icon: 			{
										url: location.icon_url,
										scaledSize: new google.maps.Size(35, 55)
									}
				});

			marker.addListener('click', function() {
						infowindow.setContent(contentString);
						infowindow.open(map, marker);
			});
			markers.push(marker);
	}


// clear all markers before we start with the search
	function clearLocations(){
		infowindow.close();
		for(var i = 0; i < markers.length; i++){
			markers[i].setMap(null);
		}
		markers.length = 0;
	}


// compare all locations with user location and output only those that are inside the radius
	function searchLocationsNear(lat, lon){
		var nearLocations = [];
		clearLocations();
		var radius = document.getElementById("radiusSelect").value;

		for(var i = 0; i < locations.length; i++){
			if(haversineDistance(lat, lon, locations[i].latitude, locations[i].longitude) < radius){
				nearLocations.push(locations[i]);
			}
		}
		initialize_map(nearLocations);
		displayLocations(nearLocations);

		tempLocations = nearLocations;
	}


	function displayLocations(currLocations){

		$('#locationSelect')
		    .find('div')
		    .remove()
		    .end();

		for(var i = 0; i < currLocations.length; i++){

			$('#locationSelect').append(
				'<div class="container-fluid location-wrapper">'+
						'<h5><b>' + currLocations[i].loc_name + '</b></h5>'+
						'<small>' + currLocations[i].address + '</small>'+
				'</div>'
			);
		}
	}


//calculate the distance between two points and return it
	function haversineDistance(lat1, lon1, lat2, lon2) {

	  function toRad(x) {
	    return x * Math.PI / 180;
	  }

	  var R = 3959; // km

	  var x1 = lat2 - lat1;
	  var dLat = toRad(x1);
	  var x2 = lon2 - lon1;
	  var dLon = toRad(x2)
	  var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
	    Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) *
	    Math.sin(dLon / 2) * Math.sin(dLon / 2);
	  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
	  var d = R * c;

	  return d;
	}

$(function() {
	var locations_str = php_args.locations.replace(/&quot;/g, '"');
	locations = $.parseJSON(locations_str);
	initialize_map(locations);
	displayLocations(locations);

//search for bins near user's location
	$("#searchButton").click(function(){
		var address = document.getElementById("addressInput").value;
		var geocoder = new google.maps.Geocoder();

		geocoder.geocode({address: address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				var ulat = results[0].geometry.location.lat();
        var ulon = results[0].geometry.location.lng();
 					searchLocationsNear(ulat, ulon);
			} else {
					alert(address + ' not found');
			}
		});
	});

});
})(jQuery);


function directions_to_bin() {
	alert('getting directions');
}
