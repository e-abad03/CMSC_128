<?php
	$servername = "localhost";									 	
	$username = "root";													
	$password = "";													 	
	$dbname = "Exit_Program_Survey";												
	$conn = mysqli_connect($servername, $username, $password, $dbname);	
	if(!$conn) die(mysqli_error($conn));
	
	$a = $_POST['likert'];
	$ctr = $_POST['counter'];
	$insert = "INSERT INTO Likert_scale (".$a.",Counter) VALUES ('1','$ctr')";
	if ($conn->query($insert) === TRUE){
		echo "New record created succesfully";
	}else{
		echo "Error: ".$insert."<br>".$conn->error;
	}
?>