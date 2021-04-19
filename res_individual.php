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

$a = $_GET['id'];
$b = $_GET['email'];
$c = $_GET['name'];
$d = $_GET['studentnum'];
$e = $_GET['course'];

$select = "SELECT questionnaire.question, respondents.rate
			FROM questionnaire NATURAL JOIN respondents
			WHERE (questionnaire.question_id = respondents.question_id) AND id ='$a'";
$result = mysqli_query($conn,$select); 
?>

<body>
<h>Tally of the Exit Survey Program</h><br><br>

<p><?php 
	if ($c == null) {
		echo "Anonymous";
	}else{
		echo $c;
	}
	?>
</p>

<ul style="list-style-type:none;">
  	<li>Email: <?php echo $b?></li>
  	<li>Student Number: 
  		<?php 
		if ($d== null) {
			echo "Not provided";
		}else{
			echo $d;
		}?>
	</li>
	<li>Degree Program: <?php echo $e?></li>
</ul>

<table>
	<tr>
		<th>Questions</th>
		<th>Rating</th>
	</tr>
	<?php 
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
	?>
		<tr>
			<td><?php echo $row['question']?>
			</td>
			<td><?php echo $row['rate']?>
			</td>
		</tr>
	<?php
		}
	}?>
</table>
</body>
</html>