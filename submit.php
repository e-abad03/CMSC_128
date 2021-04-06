<?php
	include_once('connection.php');
	
	$a = $_POST['id'];
	$b = $_POST['question_id'];
	$c = $_POST['rate'];
	
	$insert = "INSERT INTO respondents (id, up_mail, question_id, rate) VALUES (null, '$a','$b','$c')";
	if ($conn->query($insert) === TRUE){
		echo "New record created succesfully";
	}else{
		echo "Error: ".$insert."<br>".$conn->error;
	}
?>