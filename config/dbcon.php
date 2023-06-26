<?php

  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "phpecom";

//Creating DataBase Connection
  $con = mysqli_connect($host, $username, $password, $database);

  //Check DataBase Connection
if (!$con) {
  die("ERROR: Could not connect. ". mysqli_connect_error());
}



?>