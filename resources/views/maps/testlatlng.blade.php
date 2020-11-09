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
         p.ex1 {
  margin-left: 30px;
}

      </style>
  </head>
  <body style="margin-left: 50px">
    <h3>Latitude Longitude values</h3>
    @foreach ($gps as $gps)
    
    <p>lat : {{$gps->lat}}, lng : {{$gps->long}} </p>

    
    @endforeach 

  </body>
</html>