<html>
<head>
	<title>Exit Survey Program</title>
</head>

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


?>
<body>

<h>Personal Information</h><br><br>

<form action="demographics_submit.php?id=<?php echo $a?>" method="post">
		Full Name (optional): <br>
		<input type="text" name="fullname"><br>

		Student Number (optional): <br>
		<input type="text" name="studentnum"><br>

		<label for='course'>Degree Program: </label><br>
			<select id="course" name="course" required>
				<option value="BS Computer Science">BS Computer Science</option>
	    		<option value="BS Mathematics">BS Mathematics</option>
	    	</select>
	    <br>
	    
	    <input type="submit" value="Submit">
	
</form>
</body>
</html>