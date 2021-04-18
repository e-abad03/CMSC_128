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
      
		$sql = "SELECT * FROM login WHERE student_num = '$myusername' and Password = '$mypassword'";
		$result = mysqli_query($conn,$sql);     
      
		if($count=mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				if($count == 1) {
					if($row['Type']==0){
						$_SESSION['username']=$myusername;
						header("location: index.php?id=".$row['up_mail']."");
					}
					if($row['Type']==1){
						$_SESSION['username']=$myusername;
						header("location: admin_page.php");
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
	<head>
		<title>Login Page</title>
		<style type = "text/css">
			body {
				font-family:Arial, Helvetica, sans-serif;
				font-size:14px;
			}
			label {
				font-weight:bold;
				width:100px;
				font-size:14px;
			}
			.box {
				border:#666666 solid 1px;
			}
		</style>
	</head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>