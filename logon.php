<?php
session_start();
 // Script 8.4 - main_logon.php
/* This is the home page for this site. 
It uses templates to create the layout. */
session_start();
// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
?>

<div class="row center">
<h2 class="center">Please Login with valid User ID and Password</h2> 
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
  <form name="form1" method="post" action="checklogin.php">
  <td>
  <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF"></td>
  </tr>
  <td colspan="3"><strong>Member Login </strong></td>
  <tr>
  <td width="78">Username</td>
  <td width="6">:</td>
  <td width="294"><input name="myusername" type="text" id="myusername"></td>
  </tr>
  <tr>
  <td>Password</td>
  <td>:</td>
  <td><input type=password name="mypassword" type="text" id="mypassword"></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="Login"></td>
  </tr>
</div>
		
<?php	
include('templates/footer.html');	
?> 
     
</body>
</html>