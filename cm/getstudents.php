<?php
	require 'DbConnect.php';

	
	$result = array();
	
	$sql = "SELECT * FROM `userinfo`";
	$res = mysqli_query($con, $sql);

	if(mysqli_num_rows($res)>0){
		while($data=mysqli_fetch_array($res)){
			array_push($result,$data['name']);
		}
		
		$response['success'] = "200";
		$response['result'] = $result;
		die(print_r(json_encode($response),true));
	}else{
		$response['success'] = "201";
		die(print_r(json_encode($response),true));
	}
?>