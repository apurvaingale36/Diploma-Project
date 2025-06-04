<?php
require('DbConnect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$name = $_POST['name'];
	$domain = $_POST['domain'];
	$students = $_POST['students'];
	$sdate = Date('Y-m-d');
		
	if($name == ''||$domain == ''||$sdate == ''){
		echo 'please fill all values';
	}else{
		
		$sql = "INSERT INTO `attendance` (teacher,subject,date,present_students) VALUES('$name','$domain','$sdate','$students')";
		
		if(mysqli_query($con,$sql)){
			
				$result = array();
		
				$sql1 = "SELECT * FROM `parentinfo` WHERE `sname` not like '%$students%'";
				$res = mysqli_query($con, $sql1);

				if(mysqli_num_rows($res)>0){
					while($data=mysqli_fetch_array($res)){
						array_push($result,$data['mobile']);
					}
				}
				$response['success'] = "200";
				$response['result'] = $result;
				$response['message'] = "Attendance Added Successfully...";
				die(print_r(json_encode($response),true));
			}else{
				$response['success'] = "201";
				$response['message'] = "Failed To Add Attendance!";
				die(print_r(json_encode($response),true));
			} 
		}
}else{
	$response['success'] = "201";
	$response['message'] = "Connectivity Failed!";
	die(print_r(json_encode($response),true));
}
?>