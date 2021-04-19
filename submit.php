<?php
	include_once('connection.php');
	
	$a = $_POST['id'];	
	for ($j = 1; $j <= 9; $j++){
		$carry1 = "question_id$j";
		$carry2 = "rate$j";
		$b = $_POST[$carry1];
		$c = $_POST[$carry2];
		$insert = "INSERT INTO respondents (id, question_id, rate) VALUES ('$a','$b','$c')";
		if ($conn->query($insert) === TRUE){
			//echo "New record created succesfully";
		}else{
			echo "Error: ".$insert."<br>".$conn->error;
		}
	}

$select = "select * from respondents";
$result = mysqli_query($conn,$select);
	if(mysqli_num_rows($result)>0){
		echo "<table>
				<tr>
					<th>Question Number</th>
					<th>Rating</th>
				</tr>";
		while($row=mysqli_fetch_assoc($result)){
			echo "
				<tr>
					<td>".$row['question_id']."</td>
					<td>".$row['rate']."</td>
				</tr>
			";
		}
		echo "</table>";
	}else echo "Empty table";
?>
