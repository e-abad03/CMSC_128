<?php
include_once('connection.php');

session_start();
if(!isset($_SESSION['username'])){
	session_destroy();
	header("Location: login.php");
	die();
}

if(isset($_POST['logout'])){
	session_destroy();
	header("Location: ./login.php");
	exit;
}

$a = $_GET['id'];

$update = "UPDATE demographics SET up_mail = (SELECT up_mail FROM login WHERE login.id = demographics.id)";
	if ($conn->query($update) === TRUE){
			header("location: index.php?id=".$a."");
	}else{
		echo "Error: ".$update."<br>".$conn->error."<br><br>";

	$conn->close();
	}

?>