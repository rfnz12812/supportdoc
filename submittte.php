<?php //submittte.php
session_start();
$sname = $_SESSION['name'];
$slvl  = $_SESSION['level']; // session level stored as string 
if ($slvl != "all") {     //  convert to int
	header('location: accno.php');
}
// Script 8.4 - directory.php
/* This is the home page for this site. 
It uses templates to create the layout. */

// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
?>
<div class="container">
  <div class="row">
   <div class="col-lg-4 active"> 
    	<h2 class="enter">Directory Listing</h2>
      <ul class="nav nav-left">
            
				<li id="dir"><a href="http://192.168.1.105:88/cgi-bin/setup.cgi">Submit TTE Ticket</a></li> 
				 
        </ul>
   </div>
<?php  
   include('templates/footer.html'); // Include the footer.
?>