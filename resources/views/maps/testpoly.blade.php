
<!DOCTYPE html>
<html>
  <head>
    <title>Simple Marker Icons</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolyOarpY_ZRm-gR8i2MPkadw7JNKp-yc&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 18,
          center: { lat: 6.053519, lng: 80.220978 },
        });
        // const image =
        // "https://maps.gstatic.com/intl/en_us/mapfiles/markers2/measle.png";

        const image0 =
        "http://maps.google.com/mapfiles/ms/icons/blue-dot.png";
        const image5 =
        "http://maps.google.com/mapfiles/ms/icons/red-dot.png";

        const image4 =
        "http://maps.google.com/mapfiles/ms/icons/green-dot.png";

        @foreach ($gps0 as $gps)
            var beachMarker = new google.maps.Marker({
            position: { lat: {{$gps->lat}}, lng: {{$gps->long}} },
            map,
            icon: image0
            });
            // var fleet = {lat: {{$gps->lat}}, lng: {{$gps->long}}};
            // var marker = new google.maps.Marker({
            //     position: fleet,
            //     map: map
            // });
            
        @endforeach 

        @foreach ($gps5 as $gps)
            var beachMarker = new google.maps.Marker({
            position: { lat: {{$gps->lat}}, lng: {{$gps->long}} },
            map,
            icon: image5,
            });
            // var fleet = {lat: {{$gps->lat}}, lng: {{$gps->long}}};
            // var marker = new google.maps.Marker({
            //     position: fleet,
            //     map: map
            // });
            
        @endforeach 
        @foreach ($gps4 as $gps)
            var beachMarker = new google.maps.Marker({
            position: { lat: {{$gps->lat}}, lng: {{$gps->long}} },
            map,
            icon: image4,
            });
            // var fleet = {lat: {{$gps->lat}}, lng: {{$gps->long}}};
            // var marker = new google.maps.Marker({
            //     position: fleet,
            //     map: map
            // });
            
        @endforeach 
          

        // const beachMarker = new google.maps.Marker({
        //   position: { lat: -33.89, lng: 151.274 },
        //   map,
        //   icon: image,
        // });
      }
    </script>
    <meta http-equiv="refresh" content="900">
  </head>
  
  <body>
    <div id="map"></div>
  </body>
</html>
