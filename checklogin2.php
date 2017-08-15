<?php
session_start();
$host = 'localhost'; // Host name
$username ='root'; // Mysql username
$password = ''; // Your Mysql password
$db = 'fcfdb'; // Database name
$tblname = 'member'; // Table name
$con = NULL;
// Connect to server and select databse.
$con = mysql_connect($host,$username,$password,$db);
// check connection
if (!$con) {
	header("location:confail.php");
//    printf("Error connect: %s\n", mysqli_error($con));
//    exit();
}
// username and password sent from form 
$name=$_POST['myusername'];
$pass=$_POST['mypassword']; 
if( "$name" == "" || "$pass" == "") {
	header("location:logonfail.php");
	}
// sql string 
$sql  =  "SELECT name,password,level FROM member WHERE name = '$name' and password = '$pass'";
$result = mysql_query($con,$sql);
// check query
if (mysqli_num_rows($result)==0){
//if (!$result) {
    header("location:logonfail.php");
 } else {
// got data 	get user info
   $row = mysql_fetch_array($result);
//   echo $row['name'];
//   echo $row['password'];
//   echo $row['level'];
// save logon info to session data xampp/tmp/...
$_SESSION['name'] = $row['name'];  
$_SESSION['level'] = $row['level'];
header("location:logsuccess.php"); // display logon successful
}
?>

