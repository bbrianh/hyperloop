<?php
  try {
    //connect database
    $file_db = new PDO('sqlite:../DB/ex203.s3db');       
    $file_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //edit your SQL here
    $sql = "insert into loginTable values('$_REQUEST[form-username]','$_REQUEST[form-password]');";                
    $result = $file_db->query($sql);
    if (!$result) {
      $msg = $file_db->errorInfo();
      echo $sql;
      die('Invalid query: '. $msg[2]);
    } else {
      //成功新增後, 立即轉回
      header('location:login.php');    
    }
  }
  catch(PDOException $e) {
    //如果發生錯誤, 列印出錯誤地方
    echo $e->getMessage();
    echo "<br>$sql";
  }
?>
