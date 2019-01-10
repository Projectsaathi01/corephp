
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="3">
		<thead>
			<th>#</th>
			<th>Title</th>
			<th>Amount</th>
			<th>Due Amount</th>
			<th>Prepaid Amount</th>
			<th>Year</th>
			<th>Month</th>
			<th>Operation</th>
		</thead>
		
	
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
// echo "Connected successfully";


	$sql = "SELECT *FROM tbl_expenses";
	$result = $conn->query($sql);

	if($result->num_rows > 0)
	{	echo "<tbody>";
		while($row = $result->fetch_assoc())
		{	echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["title"]."</td>";
			echo "<td>".$row["amount"]."</td>";
			echo "<td>".$row["dueamt"]."</td>";
			echo "<td>".$row["prepaidamt"]."</td>";
			echo "<td>".$row["year"]."</td>";
			echo "<td>".$row["month"]."</td>";
			echo "<td>"."<a href='#' >Edit</a>"."<td>";
			echo "<td>"."<a href='#' >Delete</a>"."<td>";


			// echo $row["title"];
			// echo $row["amount"];
			// echo $row["dueamount"];
			// echo $row["prepaidamount"];
			// echo $row["year"];
			// echo $row["month"];

			echo "</tr>";



		}
		echo "</tbody";
	}

	$conn->close();
?>
</table>
</body>
</html>