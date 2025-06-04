<?php
	require 'DbConnect.php';

	$sql = "SELECT * FROM `teacher`";

	$res = mysqli_query($con, $sql);

	$result = array();
 
	while($row = mysqli_fetch_array($res)){
		array_push($result,
		array('tname' => $row[1],		
		));
	}

	echo json_encode(array("result" => $result));
	
	mysqli_close($con);
?>