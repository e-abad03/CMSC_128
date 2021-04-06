<!DOCTYPE html>
<html>
<head>
	<title>Exit Survey Program</title>
</head>

<body>
	<form action="login_submit.php" method="post">
		Email Address<br>
		<input type="text" name="email" required><br>

		Name<br>
		<input type="text" name="name"><br>

		Student Number<br>
		<input type="text" name="studentnum"><br>

		<label for='role'>Degree Program </label><br>
			<select id="role" name="course" required>
				<option value="BS Computer Science">BS Computer Science</option>
	    		<option value="BS Mathematics">BS Mathematics</option>
	    	</select>
	    <br><br>

	    <input type="submit" value="Submit">
	</form>
</body>

</html>