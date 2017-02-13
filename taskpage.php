<head>
	<script src="js/taskpage.js" type="text/javascript"></script>
</head>
<?php
	echo "<h1>".$_GET["name"]."</h1>"."<br>"."<table cellspaing='50px'><tr>"."<th>ID</th> <th>Name</th> <th>Time</th> <th>Status</th>"."</tr>";
	$servername = "localhost";
	$dbname = "Projects";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = 'SELECT Id, TaskName, Stopped_at, Stopped, Timepaused FROM Tasks WHERE ProjectName ='."'".$_GET["name"]."'".' ORDER BY  Id DESC';
	$result = mysqli_query($conn, $sql);
	if(!$result) {
		echo("Error description: " . mysqli_error($conn));
	}
	foreach($result as $task) {
		$status;

		if($task["Stopped"]) {
			$status = "STOPPED";
		}
		else {

			$status = "RUNNING";
		}
		echo "<tr>";
		echo "<td>".$task["Id"]."</td><td>".$task["TaskName"]."</td><td>".$task["Changed"]."</td><td>".$status."<button onclick='stopstart(this.id)'id="."'".$task["Id"]."'".">Start/Stop</button></td>";
		echo "</tr>";
	}

	
	echo '<form action="createtask.php" method="post">';
	echo '<input style="display:none" name="projectname" value="'.$_GET["name"].'"></input>';
	echo '<input style="display:none" name="URL" value="'.$_SERVER['REQUEST_URI'].'"></input>';
	mysqli_close($conn);
?>
<input type="text" name="name" placeholder="Name new task"></input>
<input type="submit" value="START">

</form>