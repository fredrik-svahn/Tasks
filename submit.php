<?php
				$servername = "localhost";
				$dbname = "Projects";
				$username = "root";
				$password = "root";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "CREATE TABLE ".$_POST["name"]." (
				`id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				`taskname` CHAR(30),
				`tasktimer` INT(6)
				)";
				if (mysqli_query($conn, $sql)) {
    				echo "Table ".$_POST["name"]." created successfully";
				} else {
    			echo "Error creating table: " . mysqli_error($conn);
				}

				mysqli_close($conn);



?>