<?php

	$servername = '<HOST_NAME(127.0.0.1)>';
	$database = "Farmer";
	$username = "root";
	$password = "Mypassword@2";

	// Create connection

	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection

	if (mysqli_connect_errno()) {
		die("Connection failed: " . mysqli_connect_errno());
	}

	
?>


