<?php
session_start();
$host = "localhost"; // Host name
$username = "root";  // Mysql username
$password = "";      // Your Mysql password
$db = "fcfdb";       // Database name
$tblname = "member"; // Table name
$lvl = "";
// Connect to server and select databse.
$con = mysqli_connect($host,$username,$password,$db);
if ($con->connect_error) {
   header("location:confail.php");
}   
$name = $_POST['myusername'];
$pass = $_POST['mypassword'];
$lvl  = $_POST['mylevel'];
//$intlvl = ord($lvl);
// try to insert new user 
$sql = "SELECT * FROM member WHERE username = '$name' and password = '$pass'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)==0){
   $sql = "INSERT INTO member (name,password,level) VALUES ('$name','$pass','$lvl')";
   if(mysqli_query($con,$sql)) {
			header('location: regsuccess.php');
	} else {
			header('location: regdup.php');
	}
} else {
	header('location: regdup.php');
}
?>