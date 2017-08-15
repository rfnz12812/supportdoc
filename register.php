<?php 
session_start();
// Script 8.4 - register.php
/* This is the home page for this site. 
It uses templates to create the layout. */

// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
$name = $_SESSION['name'];
if ("$name" != 'admin') {
	header('location: accno.php');
}

?>

<div class="row center">
<h1 class="center">System Administrator User Registration Form</h1>
<h2 class="center">Enter User ID, Password, Access Level</h2> 
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
  <form name="form1" method="post" action="upuser.php">
  <td>
  <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
  <td width="78">Username</td>
  <td width="6">:</td>
  <td width="294"><input name="myusername" type="text" id="myusername"></td>
  </tr>
  <tr>
  <td>Password</td>
  <td>:</td>
  <td><input name="mypassword" type="text" id="mypassword"></td>
  </tr>
  <tr>
  <td>Access Level</td>
  <td>:</td>
  <td><input name="mylevel" type="text" id="mylevel"></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="submit"></td>
  </tr>
</div>
		
<?php	
include('templates/footer.html');	
?> 
     
</body>
</html>