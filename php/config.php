<?php
  $hostname = "localhost";
  $username = "id21433936_localhost";
  $password = "1Rc2holic3#";
  $dbname = "id21433936_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
