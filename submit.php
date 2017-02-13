<?php
				$servername = "localhost";
				$dbname = "Projects";
				$username = "root";
				$password = "root";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO ProjectNames VALUES ('".$_POST["name"]."');";

				if (!mysqli_query($conn,$sql)){
  					echo("Error description: " . mysqli_error($con));
 				}
				mysqli_close($conn);


				header("Location: http://localhost:8888");
				exit();
?>