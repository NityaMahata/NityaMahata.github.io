<?php 

// Read car_rents By ID

$url = 'http://localhost/project/api/car_rents/3';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
var_dump($response_json);
curl_close($ch);
