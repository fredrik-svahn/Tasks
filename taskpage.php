<?php
	echo $_GET["name"];


	$servername = "localhost";
	$dbname = "Projects";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, $dbname);
?>

<form action="createtask.php" method="post">
<input type="text" name="name" placeholder="Name new task"></input>
<input type="date" step="1"></input><input type="time"></input>
<input type="submit" value="Submit">
</form>