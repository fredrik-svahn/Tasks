<?php
	echo $_GET["name"];
	$servername = "localhost";
	$dbname = "Projects";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = 'SELECT Id, TaskName, Expire FROM Tasks WHERE ProjectName ='.$_GET["name"].' ORDER BY Expire';
	$result = mysqli_query($conn, $sql);

	foreach($result as $task) {
		echo $task["Id"]."	".$task["TaskName"]."	".$task["Expire"];
	}

	mysqli_close($conn);
?>

<form action="createtask.php" method="post">
<input type="text" name="name" placeholder="Name new task"></input>
<input type="date" name="date"></input><input type="time" name="time"></input>
<input type="submit" value="Submit">
</form>