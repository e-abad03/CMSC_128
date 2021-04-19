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

<h>I. Survey Degree Program</h>

<?php

$id = $_GET['id'];
$select = "select * from questionnaire";
$result = mysqli_query($conn,$select);
$a = 0;

echo "<form action='submit.php' method='post'>";
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$i = $row['question_id'];
		echo $row['question'];
		echo "<br>";
		echo "
			<input type='radio' id='One' name='rate$i' value='1'>
			<label for='One'>1</label>
			<input type='radio' id='Two' name='rate$i' value='2'>
			<label for='Two'>2</label>
			<input type='radio' id='Three' name='rate$i' value='3'>
			<label for='Three'>3</label>
			<input type='radio' id='Four' name='rate$i' value='4'>
			<label for='Four'>4</label>
			<input type='radio' id='Five' name='rate$i' value='5'>
			<label for='Five'>5</label>
			<input type='hidden' name='question_id$i' value='$i'>";
		echo"<br>";
		if($row['question_id']>8){
			break;
		}
	}
}else
mysqli_close($conn);
?>

	<input type="hidden" name="id" value="<?php echo $id?>">
	<input type="submit" value="Submit">
	</form>
	<br>
	<form action="" method="post">
		<input type="submit" name="logout" value="Log Out">
	</form>
</body>
</html>
