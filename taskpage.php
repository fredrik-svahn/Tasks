
<?php
	echo "<h1>".$_GET["name"]."</h1>"."<br>"."<table cellspaing='50px'><tr>"."<th>ID</th> <th>Name</th> <th>Time</th> <th>Status</th>"."</tr>";
	$servername = "localhost";
	$dbname = "Projects";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = 'SELECT Id, TaskName, created_at FROM Tasks WHERE ProjectName ='."'".$_GET["name"]."'".' ORDER BY  created_at DESC';
	$result = mysqli_query($conn, $sql);
	
	foreach($result as $task) {
		$status;
		if($task["Stopped"]) {
			$status = "STOPPED";
		}
		else {
			$status = "RUNNING";
		}
		echo "<tr>";
		echo "<td>".$task["Id"]."</td><td>".$task["TaskName"]."</td><td>".$task["created_at"]."</td><td>".$status."<button>Start/Stop</button></td>";
		echo "</tr>";
	}

	mysqli_close($conn);
	echo '<form action="createtask.php" method="post">';
	echo '<input style="display:none" name="projectname" value="'.$_GET["name"].'"></input>';
	echo '<input style="display:none" name="URL" value="'.$_SERVER['REQUEST_URI'].'"></input>';
?>
<input type="text" name="name" placeholder="Name new task"></input>
<input type="submit" value="START">

</form>