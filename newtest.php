<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Your Mysql password
$db_name="fcfdoco"; // Database name
$tbl_name="members"; // Table name
$level="";
// Connect to server and select databse.
// $con = mysqli_connect($host,$username,$password,$db_name)or die("cannot connect");
$con = mysqli_connect($host,$username,$password);
mysqli_select_db($con,$db_name);
?>