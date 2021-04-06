<?php

$servername = "localhost:8111";								 		
$username = "root";													
$password = "";													 	
$dbname = "survey";												
$conn = mysqli_connect($servername, $username, $password, $dbname);	

if(!$conn) die(mysqli_error($conn));								

?>