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
				if (!mysqli_query($con,$sql){
  					echo("Error description: " . mysqli_error($con));
 				}
				echo $sql;
				echo $query;
				mysqli_close($conn);



?>