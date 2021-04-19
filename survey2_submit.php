<?php
	include_once('connection.php');
	
	$a = $_POST['id'];

	for ($i = 7; $i <= 9; $i++){

		$question_id = "question_id$j";
		$rate = "rate$j";

		$b = $_POST[$question_id];
		$c = $_POST[$rate];

		$insert = "INSERT INTO rating (id, question_id, rate) VALUES ('$a','$b','$c')";
		if ($conn->query($insert) === FALSE){
			echo "Error: ".$insert."<br>".$conn->error;
		}
	}

	for ($i = 10; $i <= 11; $i++){

		$question_id = "question_id$j";
		$comment = "comment$j";

		$b = $_POST[$question_id];
		$c = $_POST[$comment];

		$insert = "INSERT INTO suggestion (id, question_id, comment) VALUES ('$a','$b','$c')";
		if ($conn->query($insert) === FALSE){
			echo "Error: ".$insert."<br>".$conn->error;
		}
	}



	header("location: survey3.php?id=".$a."");


?>