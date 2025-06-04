<?php
require('DbConnect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
		$otp = $_POST['otp'];
		
						
				$sql = "INSERT INTO userinfo (otp) VALUES('$otp')";
				if(mysqli_query($con,$sql))
					echo 'Enter Your OTP';
				else
					echo 'oops! Please try again!';				
			    
			mysqli_close($con);
		
}else{
echo 'error';
}
?>