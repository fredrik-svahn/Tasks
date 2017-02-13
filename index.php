<html>
	<head>
		<title>Tasks</title>
		<meta charset="UTF-8">
		<script type="text/javascript" src="js/script.js"></script>
		<link href="css/style.css" rel="stylesheet">

	</head>

	<body>
		<h1>Projects</h1>
		<?php
		$servername = "localhost";
		$dbname = "Projects";
		$username = "root";
		$password = "root";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "SELECT * FROM ProjectNames";
		$result = mysqli_query($conn, $sql);

		foreach($result as $project) {
			echo '<a href="#" id="'.$project["ProjectName"].'" onclick="viewTasks(this.id)">'.$project["ProjectName"].'</a><br>';
		}

		mysqli_close($conn);
		?>
		<form action="submit.php" method="post">
			<input type="text" name="name" placeholder="Name your new project"></input>
			<input type="submit" value="Submit">
		</form>
	</body>

</html>