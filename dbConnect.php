<?php

//access variables
$dbHost = //db host address; 
$dbUserAndName = //username 
$dbPass = //password
$database = //database name;

// Create connection to database
global $con;
$con = mysqli_connect($dbHost, $dbUserAndName, $dbPass);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
//select database
$bool = mysqli_select_db($con, $database);
if ($bool === False){
	echo "Can't find the specified database: $database";
}
?>
