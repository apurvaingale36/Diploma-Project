<?php
require('DbConnect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
	
		$ename = $_POST['ename'];
		$sdate = $_POST['sdate'];
		$stime = $_POST['stime'];
		
		if($ename == ''||$sdate == ''||$stime == ''){
			echo 'please fill all values';
		}else{
			
			$sql = "SELECT * FROM event WHERE event_name='$ename' ";
			
			$check = mysqli_fetch_array(mysqli_query($con,$sql));
			
			if(isset($check)){
				$response['success'] = "200";
				$response['message'] = "Event Already Exist!";
				die(print_r(json_encode($response),true));
			}else{				
			
				$sql1 = "INSERT INTO event (event_name,date,time) VALUES('$ename','$sdate','$stime')";
				
				if(mysqli_query($con,$sql1)){
					$response['success'] = "200";
					$response['message'] = "Event Added Successfully...";
					die(print_r(json_encode($response),true));
				}else{
					$response['success'] = "201";
					$response['message'] = "Failed To Add Event!";
					die(print_r(json_encode($response),true));
				} 
			}
			
		}
}else{
	$response['success'] = "201";
	$response['message'] = "Connectivity Failed!";
	die(print_r(json_encode($response),true));
}
?>