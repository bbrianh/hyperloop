<?php
	header('Content-Type: application/json');
	//db setting
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "hyperloop";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Get username and password from login page
	$clientUserName = $_POST["form-username"];
	$clientPassword = $_POST["form-password"];
	
	$sql= "select * from login where username='$clientUserName' and password='$clientPassword'";
	$response = $conn->query($sql);

	if ($response->num_rows == 1){
		header("Refresh:3;url=main.html");
	}
	
	else {
		echo("please try again");
		echo($clientPassword);
		header("Refresh:1000;url=main.html");
	}
?>