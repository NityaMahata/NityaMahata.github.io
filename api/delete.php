<?php 

	// For Delete a Product
    ini_set("display_errors", 0);
	
	$url = 'http://localhost/project/api/car_rents/6';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response_json = curl_exec($ch);
	var_dump($response_json);
	curl_close($ch);
	$response=json_decode($response_json, true);