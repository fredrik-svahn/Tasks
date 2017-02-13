<?php
	$servername = "localhost";
		$dbname = "Projects";
		$username = "root";
		$password = "root";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql2 = "SELECT Stopped, Stopped_at FROM Tasks WHERE Id=".$_POST["id"].";";
		$result = mysqli_query($conn, $sql2);

 		if(!$result) {
 			echo(mysqli_error($conn));
 		}
 		
		$sql = "UPDATE Tasks SET Stopped= NOT Stopped WHERE Id=".$_POST["id"].";";

		if (!mysqli_query($conn,$sql)){
  			echo("Error description: " . mysqli_error($conn));
 		}




 		mysqli_close();
?>