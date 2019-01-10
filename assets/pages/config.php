<?php

$servername = "localhost";
	$username = "admin";
	$password = "projectsaathi";
	$dbname = "roomrent";

	// Create Connection 

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check Connection
	if($conn->connect_error)
	{
		die("Connection Error" .$conn->connect_error);
	}

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>