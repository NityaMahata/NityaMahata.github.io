<?php 

  // For Update car_rents  
  
	$data=array(
			'car_name' => 'Honda',
			'rent' => 7000,
			'quantity' => 2,
			'renter_by' => 'XYZ Traders',
			'rent_to' => 'Mr. Ram'
	);
	$url = 'http://localhost/project/api/car_rents/15';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response_json = curl_exec($ch);
	var_dump($response_json);
	curl_close($ch);
