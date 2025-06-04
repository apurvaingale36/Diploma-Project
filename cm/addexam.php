<?php
require('DbConnect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
	
		$subname = $_POST['subname'];
		$sdate = $_POST['sdate'];
		$stime = $_POST['stime'];
		
		if($subname == ''||$sdate == ''||$stime == ''){
			echo 'please fill all values';
		}else{
			
			$sql = "SELECT * FROM schedule WHERE subname='$subname' ";
			
			$check = mysqli_fetch_array(mysqli_query($con,$sql));
			
			if(isset($check)){
				$response['success'] = "200";
				$response['message'] = "Exam Already Exist!";
				die(print_r(json_encode($response),true));
			}else{				
			
				$sql1 = "INSERT INTO schedule (subname,date,time) VALUES('$subname','$sdate','$stime')";
				
				if(mysqli_query($con,$sql1)){
					$response['success'] = "200";
					$response['message'] = "Exam Added Successfully...";
					die(print_r(json_encode($response),true));
				}else{
					$response['success'] = "201";
					$response['message'] = "Failed To Add Exam!";
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