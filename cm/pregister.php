<?php
require('DbConnect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$sname = $_POST['sname'];
		//$eno = $_POST['enrn'];
		
		if($name == ''||$password == ''||$email == ''||$mobile == ''||$address == ''){
			echo 'please fill all values';
		}else{
			require_once('DbConnect.php');
			$sql = "SELECT * FROM parentinfo WHERE mobile='$mobile' AND email='$email'";
			
			$check = mysqli_fetch_array(mysqli_query($con,$sql));
			
			if(isset($check)){
				echo 'username or email already exist';
			}else{				
				$sql = "INSERT INTO parentinfo (name,password,email,mobile,address,sname) VALUES('$name','$password','$email','$mobile','$address','$sname')";
				if(mysqli_query($con,$sql))
					echo 'successfully registered';
				else
					echo 'oops! Please try again!';				
			    } 
			mysqli_close($con);
		}
}else{
echo 'error';
}
?>