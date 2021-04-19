<?php
include_once('connection.php');

session_start();
	
	if(isset($_SESSION['username'])){
		session_destroy();
		header("Location:index.php");
		exit;
	}
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		//username and password sent from form 
		$myusername = mysqli_real_escape_string($conn,$_POST['username']);
		$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
		$sql = "SELECT * FROM login WHERE up_mail = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($conn,$sql);     
      
		if($count=mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				if($count == 1) {
					if($row['type']==0){
						$_SESSION['username']=$myusername;
						header("location: demographics.php?id=".$row['id']."");
					}
					if($row['type']==1){
						$_SESSION['username']=$myusername;
						header("location: admin.php");
					}
				}else {
					echo "Your Login Name or Password is invalid";
				}
			}
		}else echo "Empty table";
	}
   mysqli_close($conn);
?>

<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<head>
		<title>Login Page</title>
		
	</head>
   
   <body bgcolor = "#FFFFFF">
	
      <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://cs.upb.edu.ph/assets/images/upbcs-logo.png" id="icon" alt="User Icon"/>
       <h1 style="font-size: 150%; font-family: 'Poppins', sans-serif;">DMCS EXIT SURVEY PROGRAM</h1>
    </div>


    <!-- Login Form -->
    <form action = "" method = "post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="UP Mail">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

   </body>
</html>