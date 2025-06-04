<?php
	require 'DbConnect.php';

	$sql = "SELECT * FROM `event`";

	$res = mysqli_query($con, $sql);

	$result = array();
 
	while($row = mysqli_fetch_array($res)){
		array_push($result,
		array('event_name' => $row[1],
		'date' => $row[2],
		'time' => $row[3],
		));
	}

	echo json_encode(array("result" => $result));
	
	mysqli_close($con);
?>