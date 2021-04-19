<?php
	include_once('connection.php');
	
$a = $_GET['id'];
$b = $_POST['fullname'];
$c = $_POST['studentnum'];
$d = $_POST['course'];

$insert = "INSERT INTO demographics (id, full_name, student_num, degree_program) VALUES ('$a', '$b', '$c', '$d') " ; 
	if ($conn->query($insert) === TRUE){
			header("location: demographics_redirect.php?id=".$a."");
	}else{
		echo "Error: ".$insert."<br>".$conn->error."<br><br>";

	$conn->close();
	}
?>