<?php

	require('DbConnect.php');
	date_default_timezone_set('Asia/Kolkata');
	
	$sender = $_POST['sender'];
	$receiver = $_POST['receiver'];
	$message = $_POST['message'];
	
	$sql = "INSERT INTO `message` VALUES('$sender','$receiver','$message') ";
	if(mysqli_query($con,$sql)){
		die(print("200"));
	}else{
		die(print("Something went wrong! Try again"));
	}
?>