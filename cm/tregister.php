<?php
require('DbConnect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$domain = $_POST['domain'];
		$class = $_POST['class'];
		$idno = $_POST['idno'];
		
		if($name == ''||$password == ''||$email == ''||$mobile == ''||$domain == ''){
			echo 'please fill all values';
		}else{
			require_once('DbConnect.php');
			$sql = "SELECT * FROM teacher WHERE mobile='$mobile' AND email='$email'";
			
			$check = mysqli_fetch_array(mysqli_query($con,$sql));
			
			if(isset($check)){
				echo 'username or email already exist';
			}else{				
				$sql = "INSERT INTO teacher (name,password,email,mobile,domain,class,idno) VALUES('$name','$password','$email','$mobile','$domain','$class','$idno')";
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