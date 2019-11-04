<?php
  $conn = mysqli_connect("localhost", "root", "", "loginsystemg_o");

  if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
  }
?>
