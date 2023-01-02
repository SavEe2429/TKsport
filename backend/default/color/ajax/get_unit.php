<?php
	header('Content-Type: application/json');
	include('../../../conn.php');

	$sql = "SELECT unitcode,unit,status ";
	$sql .= "FROM unit  ";   

	$query = mysqli_query($conn,$sql);

	// echo $sql;

	$json_result=array(
        "unitcode" => array(),
		"unit" => array(),
		"status" => array()
		
		);
		
        while($row = $query->fetch_assoc()) {
            array_push($json_result['unitcode'],$row["unitcode"]);
			array_push($json_result['unit'],$row["unit"]);
			array_push($json_result['status'],$row["status"]);
        }
        echo json_encode($json_result);



?>