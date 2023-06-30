<?php

	$servername = "localhost:3307";
	$database = "Farmer";
	$username = "root";
	$password = "Mypassword@2";

	// Create connection

	$mysqli =  mysqli_connect(
	$servername, 
	$username, 
	$password, 
	$database);

	// Check connection

	if (mysqli_connect_errno()) {
		die("Connection failed: " . mysqli_connect_errno());
	}

	
?>


