
<!DOCTYPE html>
<html>
  <head>
    <title>Simple Marker Icons</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolyOarpY_ZRm-gR8i2MPkadw7JNKp-yc&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script>
    $.ajax({
        url: form.action,
        type: form.method,
        data: $(form).serialize(),
    
        success: function(response){
            $('.all-posts-body').load(); //No idea how to do this
        },
    })</script>
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
        function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: { lat: 6.053519, lng: 80.220978 },
        });
        const image =
            "https://maps.gstatic.com/intl/en_us/mapfiles/markers2/measle.png";
            @foreach ($gps as $gps)
            var infowindow = new google.maps.InfoWindow({
          content: 'hi'
        });

            var beachMarker = new google.maps.Marker({
            position: { lat: {{$gps->lat}}, lng: {{$gps->long}} },
            map,
            icon: image,
            // icon: {                             
            //     url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"                           }
            
            // });
            var infowindow = new google.maps.InfoWindow({
            content:'decimal places          : '+{{$gps->vehicle_id}}
            });
            infowindow.open(map, beachMarker);
            
            
            // var fleet = {lat: {{$gps->lat}}, lng: {{$gps->long}}};
            // var marker = new google.maps.Marker({
            //     position: fleet,
            //     map: map
            // });
            
        @endforeach 
        }
    </script>
    <meta http-equiv="refresh" content="900">
  </head>
  
  <body>
    <div id="map"></div>
  </body>
</html>
