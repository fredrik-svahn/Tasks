<?php
	$servername = "localhost";
	$dbname = "Projects";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = 'INSERT INTO Tasks VALUES (`ProjectName`, `TaskName`, `Expire`) '

	mysqli_close($conn); 
?>