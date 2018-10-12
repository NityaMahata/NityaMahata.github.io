<?php 

// Connect to database
	$connection=mysqli_connect('localhost','root','','rest_api');

	$request_method=$_SERVER["REQUEST_METHOD"];
	switch($request_method)
	{
		case 'GET':
			// Retrive car_rents
			if(!empty($_GET["car_rents_id"]))
			{
				$car_rents_id=intval($_GET["car_rents_id"]);
				get_car_rents($car_rents_id);
			}
			else
			{
				get_car_rents();
			}
			break;
		case 'POST':
			// Insert car_rents
			insert_car_rents();
			break;
		case 'PUT':
			// Update car_rents
			$car_rents_id=intval($_GET["car_rents_id"]);
			update_car_rents($car_rents_id);
			break;
		case 'DELETE':
			// Delete car_rents
			$car_rents_id=intval($_GET["car_rents_id"]);
			delete_car_rents($car_rents_id);
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}

	function insert_car_rents()
	{
		global $connection;
		$car_name=$_POST["car_name"];
		$rent=$_POST["rent"];
		$quantity=$_POST["quantity"];
		$renter_by=$_POST["renter_by"];
		$rent_to=$_POST["rent_to"];		
		$query="INSERT INTO car_rents SET car_name='{$car_name}', rent={$rent}, quantity={$quantity}, renter_by='{$renter_by}', rent_to='{$rent_to}'";
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'car_rents Added Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'car_rents Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	function get_car_rents($car_rents_id=0)
	{
		global $connection;
		$query="SELECT * FROM car_rents";
		if($car_rents_id != 0)
		{
			$query.=" WHERE id=".$car_rents_id." LIMIT 1";
		}
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	function delete_car_rents($car_rents_id)
	{
		global $connection;
		$query="DELETE FROM car_rents WHERE id=".$car_rents_id;
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'car_rents Deleted Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'car_rents Deletion Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	function update_car_rents($car_rents_id)
	{
		global $connection;
		parse_str(file_get_contents("php://input"), $post_vars);
		$car_name=$post_vars["car_name"];
		$rent=$post_vars["rent"];
		$quantity=$post_vars["quantity"];
		$renter_by=$post_vars["renter_by"];
		$rent_to=$post_vars["rent_to"];	
		$query="UPDATE car_rents SET car_name='{$car_name}', rent={$rent}, quantity={$quantity}, renter_by='{$renter_by}', rent_to='{$rent_to}' WHERE id=".$car_rents_id;
	
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'car_rents Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'car_rents Updation Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

	// Close database connection
	mysqli_close($connection);
	
?>	