<?php
	header('Content-Type: application/json');
	//db setting
	$servername = "localhost";
	$username = "root";
	$password = "";
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
	
	$sql= "select password where username=$clientUserName from login";
	$respone = $conn->query($sql);
	
	if ($respone == $clientPassword){
		echo("access granted");
	}
	
	else {
		echo("access denied");
	}
	
	
	
?>