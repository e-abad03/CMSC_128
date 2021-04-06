<?php
include_once('connection.php');

$select = "select * from login";
$result = mysqli_query($conn,$select);

if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		header("location: index.php?id=".$row['up_mail']."");
	}
}else
mysqli_close($conn);





?>