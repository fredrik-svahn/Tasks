<?php
	$servername = "localhost";
	$dbname = "Projects";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = 'INSERT INTO Tasks (`ProjectName`, `TaskName`) VALUES ('."'".$_POST["projectname"]."'".','."'".$_POST["name"]."');";
	if(!mysqli_query($conn, $sql)) {
		echo("Error description: " . mysqli_error($conn));
	}
	echo $sql;
	mysqli_close($conn); 
	//header('Location: localhost:8888' . $_SERVER['REQUEST_URI']);
	exit();
?>