<?php
				$servername = "localhost";
				$dbname = "Projects";
				$username = "root";
				$password = "root";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO ProjectNames (ProjectName) VALUES (".$_POST["name"].")";

				mysqli_close($conn);



?>