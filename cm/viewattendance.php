<?php
	require 'DbConnect.php';

	$sql = "SELECT * FROM `attendance`";

	$res = mysqli_query($con, $sql);

	$result = array();
 
	while($row = mysqli_fetch_array($res)){
		array_push($result,
		array('teacher' => $row[1],
		'subject' => $row[2],
		'date' => $row[3],
		'students' => $row[4],
		));
	}

	echo json_encode(array("result" => $result));
	
	mysqli_close($con);
?>