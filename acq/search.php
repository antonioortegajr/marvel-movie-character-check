<?php
// json file with data on movies/tv shows. Located on GitHub
$search_data = file_get_contents('cinematic_data/movies/ironman/data.json');

include_once('marvel_api/marvel_api_call.php');

$data = json_decode($search_data, true);
$cast = $data[0]["movies"][0]["cast"];
$i = 0;
foreach ($cast as $key => $value) {
  //get the chracter from the key and print out for now
  $char = array_keys($cast[$i]);
//pass to marvel API call
  marvel_api($char[0]);
  $i++;

}


?>
