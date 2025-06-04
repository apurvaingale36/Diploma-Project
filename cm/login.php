<?php
	require 'DbConnect.php';
	if(isset($_POST["name"]) && isset($_POST["password"]))
	{
		$ck_query='select * from userinfo where name="'.$_POST['name'].'" AND password="'.$_POST['password'].'"'; 
		$result=mysqli_query($con,$ck_query);
		if(mysqli_num_rows($result)>0)
		{
				   $data=mysqli_fetch_array($result);
				   $response['name']=$data['name'];
				   $response['password']=$data['password'];
				   $response['id']=$data['id'];
				   $response['mobile']=$data['mobile'];
				   $response['email']=$data['email'];
				   $response['address']=$data['address'];
				   $response['eno']=$data['eno'];
				   $response['pno']=$data['pno'];
				   $response['success'] = "200";
			       $response['message'] = "Sucessfully Login";
		}
		else
		{
				   $response['success'] = "201";
			       $response['message'] = "Invalid User";
		}
		die(print_r(json_encode($response),true));
    }
	else
	{
	               $response['success'] = "202";
			       $response['message'] = "Enter Username And Password";
				   die(print_r(json_encode($response),true));
	}
	
?>