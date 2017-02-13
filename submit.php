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
				$query = mysqli_query($conn, $sql);
				echo $sql;
				echo $query;
				mysqli_close($conn);



?>