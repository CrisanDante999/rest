<?php
if(isset($_GET['direccion'])){
  $direccion = $_GET['direccion'];
  $api_key="AIzaSyCU-wfROFTewA6gxwkFO3UGvhxMQxNvs-Y";
  $google_maps_url="https://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($direccion)."&key=".$api_key;
  echo "^_^ ".$direccion;
  echo "<br>";
  echo "<br>";
  echo $google_maps_url;
  echo "<br>";
  echo "<br>";
  $google_maps_json = file_get_contents($google_maps_url);
  $google_maps_array = json_decode($google_maps_json, true);
  var_dump($google_maps_array["results"][0]["geometry"]["location"]["lat"]);
  $lat=$google_maps_array["results"][0]["geometry"]["location"]["lat"];
  $long=$google_maps_array["results"][0]["geometry"]["location"]["lng"];
echo "<br>";
  echo "<br>";
echo $lat;
echo "<br>";
  echo "<br>";
echo $long;


}//end if
?>
