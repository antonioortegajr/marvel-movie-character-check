<?php
function marvel_api($char){

//regex out any spaces
$char = preg_replace('/\s+/', '%20', $char);

//beginning of endpoint
$gate = 'http://gateway.marvel.com/v1/public/characters?name='.$char;

$APIKey ='apikey';

$PrivateKey = 'privatekey';

$timestamp = '1';

$hash = md5($timestamp . $PrivateKey . $APIKey);

//build endpoint
$ch = curl_init($gate."&ts=".$timestamp."&apikey=".$APIKey."&hash=".$hash);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HEADER, true );
$api_data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


var_dump($api_data);
}
?>
