<!DOCTYPE html>
<html>
<head>
	<title>Student Checklist</title>
</head>
<body>
	<form action="Prototype0_submit.php" method="post">
		How useful was the freshmen orientation in providing academic information?<br>
		<input type="radio" id="One" name="likert" value="1">
		<label for="One">1</label>
		<input type="radio" id="Two" name="likert" value="1">
		<label for="Two">2</label>
		<input type="radio" id="Three" name="likert" value="1">
		<label for="Three">3</label>
		<input type="radio" id="Four" name="likert" value="1">
		<label for="Four">4</label>
		<input type="radio" id="Five" name="likert" value="1">
		<label for="Five">5</label>
		
		<input type="hidden" id="1" name="counter" value="1">
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>