<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
 <script>
  var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
     var latlng = new google.maps.LatLng(50.804400, -1.147250);
    var mapOptions = {
     zoom: 6,
     center: latlng
    }
     map = new google.maps.Map(document.getElementById('map-canvas12'), mapOptions);
    }

   function codeAddress(address,tutorname,url,distance,prise,postcode) {
   var address = address;

    geocoder.geocode( { 'address': address}, function(results, status) {
     if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
       var marker = new google.maps.Marker({
      map: map,
      position: results[0].geometry.location
  });

  var infowindow = new google.maps.InfoWindow({
     content: 'Tutor Name: '+tutorname+'<br>Price Guide: '+prise+'<br>Distance: '+distance+' Miles from you('+postcode+')<br> <a href="'+url+'" target="blank">View Tutor profile</a> '
   });
    infowindow.open(map,marker);

      } /*else {
      alert('Geocode was not successful for the following reason: ' + status);
    }*/
   });
 }


  google.maps.event.addDomListener(window, 'load', initialize);
    </body>



