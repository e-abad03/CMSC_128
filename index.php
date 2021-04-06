<!DOCTYPE html>
<html>
<head>
	<title>Exit Survey Program</title>
</head>

<?php
include_once('connection.php');


$id = $_GET['id'];
$select = "select * from questionnaire";
$result = mysqli_query($conn,$select);

if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$item = $row['question_id'];
		if ($item == '1') {
			$item1 = $row['question_id'];
			$question1 = $row['question'];
		}

	}
}else
mysqli_close($conn);



?>

<body>
	<form action="submit.php" method="post">

		<input type="hidden" name="id" value="<?php echo $id?>">

		<?php echo $question1 ?><br>
		<input type="radio" id="One" name="rate" value="1">
		<label for="One">1</label>
		<input type="radio" id="Two" name="rate" value="2">
		<label for="Two">2</label>
		<input type="radio" id="Three" name="rate" value="3">
		<label for="Three">3</label>
		<input type="radio" id="Four" name="rate" value="4">
		<label for="Four">4</label>
		<input type="radio" id="Five" name="rate" value="5">
		<label for="Five">5</label>
		
		<input type="hidden" name="question_id" value="<? echo $item1">

		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>