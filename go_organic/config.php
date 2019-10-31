<?php
  $conn = new mysqli("localhost","root","","go_organic");
  if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
  }
?>
