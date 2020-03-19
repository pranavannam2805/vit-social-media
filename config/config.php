<?php
ob_start();
session_start();

$timezone=date_default_timezone_set("Asia/Kolkata");
$dbhost='localhost:3306';
$con =mysqli_connect($dbhost,"root","","social");// $ is used to create the variable
// the above functin is used to connect to the data base it takes the following values
// mysqli_connect("host or server","username (here no username so root)","password (here no password so empty string )", "name os the database");
if(mysqli_connect_errno()){
  //mysqli_connect_errno() returns the error
  echo "Failed to connect:" . mysqli_connect_errno();  // . is used for concatenation
} ?>
