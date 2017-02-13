
<?php
	$servername = "localhost";
	$dbname = "Projects";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$echo $_POST["projectname"];
	$sql = 'INSERT INTO Tasks VALUES (`ProjectName`, `TaskName`, `Expire`) ('.$_POST["projectname"].','.$_POST["name"].','.$_POST["date"].' '.$_POST["time"].')'
	mysqli_query($conn, $sql);
	
	mysqli_close($conn); 
	header("Location: index.php");

?>