<?php
include_once('connection.php');

$a = $_POST['email'];
$b = $_POST['name'];
$c = $_POST['studentnum'];
$d = $_POST['course'];

$insert = " INSERT INTO login (up_mail, full_name, student_num, degree_program) VALUES ('$a', '$b', '$c', '$d') " ; 

if ($conn->query($insert) === TRUE){
	header("Location: login_redirect.php");
}else{
	echo "Error: ".$insert."<br>".$conn->error."<br><br>";
}

?>