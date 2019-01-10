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


	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$title = $_POST['title'];
		$amt = $_POST['amount'];
		$dueamount = $_POST['dueamount'];
		$prepaidamount = $_POST['prepaidamount'];
		$year = $_POST['year'];
		$month = $_POST['month'];


	$sql = "INSERT INTO tbl_expenses (title, amount, dueamt,prepaidamt, year, month) VALUES('".$title."', '".$amt."', '".$dueamount."', '".$prepaidamount."', '".$year."', '".$month."')";

	// $sql = "INSERT INTO tbl_expenses (title, amount, dueamt,prepaidamt, year, month) VALUES('Electricity Bill', 400, 0, 50, '2075', 'Paush')";

	// var_dump($sql);
	if($conn->query($sql) === TRUE)
	{
		echo "<h4>New Record created success</>";
		// haeder("location:assets/pages/view.php");

	}
	else
	{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	}
?>