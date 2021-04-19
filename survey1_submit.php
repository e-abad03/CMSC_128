<?php
	include_once('connection.php');
	
	$a = $_POST['id'];	

	for ($i = 1; $i <= 6; $i++){

		$question_id = "question_id$j";
		$rate = "rate$j";

		$b = $_POST[$question_id];
		$c = $_POST[$rate];
		
		$insert = "INSERT INTO rating (id, question_id, rate) VALUES ('$a','$b','$c')";
		if ($conn->query($insert) === FALSE){
			echo "Error: ".$insert."<br>".$conn->error;
		}
	}

	header("location: survey2.php?id=".$a."");

	


?>
