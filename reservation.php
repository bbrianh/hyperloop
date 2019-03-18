<?php
  try {
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
    //edit your SQL here
    $sql = "insert into BookingTable values('".$_REQUEST['departure']."','".$_REQUEST['destination']."','".$_REQUEST['date']."','".$_REQUEST['phone']."','".$_REQUEST['email']."','".$_REQUEST['adult']."','".$_REQUEST['children']."');";                
    echo $sql;
	$response = $conn->query($sql);
    if (!$response) {
      $msg = $conn->errorInfo();
      echo $sql;
      die('Invalid query: '. $msg[2]);
    } else {
      //成功新增後, 立即轉回
      header('location:main.php#3');    
    }
  }
  catch(PDOException $e) {
    //如果發生錯誤, 列印出錯誤地方
    echo $e->getMessage();
    echo "<br>$sql";
  }
?>
