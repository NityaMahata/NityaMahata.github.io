<?php 
	
	// For Insert data
 
	$data=array(
			'car_name' =>'Nissan',
			'rent' => 15000,
			'quantity' => 2,
			'renter_by' =>'XYZ Traders',
			'rent_to' =>'Md Amir'
	);
	$url = 'http://localhost/project/api/car_rents';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response_json = curl_exec($ch);
	var_dump($response_json);
	curl_close($ch);
