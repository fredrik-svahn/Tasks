<?php
				$servername = "localhost";
				$dbname = "Projects";
				$username = "root";
				$password = "root";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO ProjectNames VALUES " .$_POST["name"];
				echo $sql;
				mysqli_query($conn, $sql);
				mysqli_close($conn);



?>