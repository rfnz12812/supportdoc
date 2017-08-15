<?php

$con=mysqli_connect("localhost","root","","fcfdb");
if (!$con){
   echo "Failed to connect to MySQL: "  ;
  }
 
$sql="SELECT * FROM member";

if ($result=mysqli_query($con,$sql)) {
	while ($row=mysqli_fetch_array($result)) {
	 
	echo $row['name'];
	}
}
  
 // Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
printf("Result set has %d rows.\n",$rowcount);
// Free result set
mysqli_free_result($result);
mysqli_close($con);
?> 