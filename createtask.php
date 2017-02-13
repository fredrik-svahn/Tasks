
<?php
	$servername = "localhost";
	$dbname = "Projects";
	$username = "root";
	$password = "root";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = 'INSERT INTO Tasks (`ProjectName`, `TaskName`, `Expire`) VALUES ('."'".$_POST["projectname"]."'".','."'".$_POST["name"]."'".','."'".$_POST["date"].' '.$_POST["time"].':00.000000'."'".')';
	if(!mysqli_query($conn, $sql)) {
		echo("Error description: " . mysqli_error($conn));
	}
	echo $sql;
	mysqli_close($conn); 
	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>