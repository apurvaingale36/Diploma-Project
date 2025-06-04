<?php

	require('DbConnect.php');
	date_default_timezone_set('Asia/Kolkata');
	
	$receiver = $_GET['receiver'];
	
	$result = array();
	
	$sql = "select * from message where receiver = '$receiver'";
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($data=mysqli_fetch_array($res)){
			array_push($result,array(
									"sender"=>$data['sender'],
									"message"=>$data['message']));
		}
		
		$response['result'] = $result;
		die(print_r(json_encode($response),true));
	}else{
		die(print("Something went wrong!"));
	}


?>