<html>
	<head>
		<title>Tasks</title>
		<meta charset="UTF-8">
		<script src="js/script.js" type="text/javascript"></script>
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
			echo $project["ProjectName"];
		}
		mysqli_close($conn);
		?>
		<form method="post">
			<input type="text" name="name" placeholder="Name your new project"></input>
			<input type="submit" value="Submit">
		</form>
	</body>

</html>