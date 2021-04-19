<html>
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



$select = "SELECT id, up_mail, full_name, student_num, degree_program FROM demographics";
$result = mysqli_query($conn,$select);    


?>
<body>
<h>Tally of the Exit Survey Program</h><br><br>

<table>
	<tr>
		<th>Respondents</th>
		<th>View</th>
	</tr>
	<?php if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){

	?>
	<tr>
		<td><?php 
			if ($row['full_name'] == null) {
				echo $row['up_mail'];
			}else{
				echo $row['full_name']; 
			}?>
		</td>
		<td><button title="View" type="button" onclick="location.href='./res_individual.php?id=<?php echo $row['id']?>
			&email=<?php echo $row['up_mail']?>&name=<?php echo $row['full_name']?>&studentnum=<?php echo $row['student_num']?>&course=<?php echo $row['degree_program']?>';">View</button>
	</tr>
	<?php
		}
	}?>

	
</table>
</body>

</html>
