<html>
<head>
	<title>Exit Survey Program</title>
</head>
<body>
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
?>

<h>I. Degree Program</h>


<?php

$id = $_GET['id'];
$select = "select * from questionnaire";
$result = mysqli_query($conn,$select);
$a = 0;
?>

<form action='survey2_submit.php' method='post'>

<?php
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$i = $row['question_id'];
		if($row['question_id'] >= 7 && $row['question_id'] <= 9){
?>
			<p><?php echo $row['question']?></p>
				<table text-align="center">
					<tr>
						<td><table>
							<tr><td>Needs Improvement</td></tr>
							<tr><td><input type="radio" id="One" name="rate<?php echo $i?>" value="1" required> 
							<label for="One"></label></td></tr>
						</table></td>

						<td><table>
							<tr><td>Poor</td></tr>
							<tr><td><input type="radio" id="Two" name="rate<?php echo $i?>" value="2">
								<label for="Two"></label></td></tr>
							</table></td>

						<td><table>
							<tr><td>Satisfactory</td></tr>
							<tr><td><input type="radio" id="Three" name="rate<?php echo $i?>" value="3">
							<label for="Three"></label></td></tr>
						</table></td>

						<td><table>
							<tr><td>Good</td></tr>
							<tr><td><input type="radio" id="Four" name="rate<?php echo $i?>" value="4">
								<label for="Four"></label></td></tr>
						</table></td>

						<td><table>
							<tr><td>Excellent</td></tr>
							<td><input type="radio" id="Five" name="rate<?php echo $i?>" value="5">
							<tr><label for="Five"></label></td></tr>
						</table></td>
					</tr>
				</table>
<?php
		}elseif ($row['question_id'] >= 10 && $row['question_id'] <= 11) {
	?>
				<p><?php echo $row['question']?></p>
				<input type="text" name="comment<?php echo $i?>"><br>

				<input type="hidden" name="question_id<?php echo $i?>" value="<?php echo $i?>" required>
	<?php
		}else
			continue;
	}	
}else
	mysqli_close($conn);
?>

	<input type="hidden" name="id" value="<?php echo $id?>"><br>
	<input type="submit" value="Submit">
	</form>
	<br>
	<form action="" method="post">
		<input type="submit" name="logout" value="Log Out">
	</form>
</body>
</html>