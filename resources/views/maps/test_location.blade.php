<!DOCTYPE html>
<html>
  <head>
    <title>Simple Markers</title>
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
      function initMap() {
        const myLatLng = { lat: 6.0794, lng: 80.1920 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: myLatLng,
        });
        const image =
            "https://maps.gstatic.com/intl/en_us/mapfiles/markers2/measle.png";
            var infowindow = new google.maps.InfoWindow({
            content: 'hi'
        });
        var Marker=new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Hello World!",
        });

        var infowindow = new google.maps.InfoWindow({
            content:"hello I'm here!",
            color: "red",
            fontWeight: "bold"
            });
            infowindow.open(map, Marker);
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>
