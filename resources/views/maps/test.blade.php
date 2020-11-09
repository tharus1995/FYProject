<?php
   //echo $gps
// foreach ($gps as $row) {

//     $value[] = array( 
//     "lat"=>"$row->lat", 
//     "lng"=>"$row->long"); 
//     //print_r($value);
// }
// //$gpsARR=json_encode($value);
// $gpsARR=$value;
// //print_r($gpsARR);
?>


<!DOCTYPE html>
<html>
  <head>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    {{-- @foreach ($s as $user)
        <p>This is user {{ $user->id }}</p>
    @endforeach --}}
    <script>
      function initMap() {
        var uluru = {lat: 6.9271, lng: 79.8612};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
          //height : 500
        });
        @foreach ($gps as $gps)
            var fleet = {lat: {{$gps->lat}}, lng: {{$gps->long}}};
            var marker = new google.maps.Marker({
                position: fleet,
                map: map
            });
            
        @endforeach 
          
      }
    </script>
    {{-- <script>

        var data = $gps

        //var data = "{!! addcslashes($gps, '"') !!}";
        
        console.log(data[0])
        function initMap1() {
        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: { lat: 6.9271, lng: 79.8612 },
        mapTypeId: "terrain",
    });
     const flightPlanCoordinates = [
         { lat: 37.772, lng: -122.214 },
         { lat: 21.291, lng: -157.821 },
         { lat: -18.142, lng: 178.431 },
         { lat: -27.467, lng: 153.027 },
     ];
    console.log(flightPlanCoordinates)
    // const flightPath = new google.maps.Polyline({
    //     path: flightPlanCoordinates,
    //     geodesic: true,
    //     strokeColor: "#FF0000",
    //     strokeOpacity: 1.0,
    //     strokeWeight: 2,
    // });
    // flightPath.setMap(map);
    // }


    </script> --}}
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolyOarpY_ZRm-gR8i2MPkadw7JNKp-yc&callback=initMap1">
    </script>
  </body>
</html>