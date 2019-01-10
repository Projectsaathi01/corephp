<?php
	
	// function create()
	// {
	// 	$title = $_POST['title'];
	// 	$amount = $_POST['amount'];
	// 	$dueamount = $_POST['dueamount'];
	// 	$prepaidamount = $_POST['prepaidamount'];
	// 	$year = $_POST['year'];
	// 	$month = $_POST['month'];
	// 	echo "Title". $title;
	// hello();

	// }

	// function hello()
	// {
	// 	echo "Hello";
	// }
	// create();
		// echo "string";
	
		
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
// echo "Connected successfully";

		$id = $_POST['id'];
		$title = $_POST['title'];
		$amt = $_POST['amount'];
		$dueamount = $_POST['dueamount'];
		$prepaidamount = $_POST['prepaidamount'];
		$year = $_POST['year'];
		$month = $_POST['month'];


	
	$conn->close();
?>