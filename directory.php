<?php 
session_start();
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
            <li class="active"><a href="index.php">Home</a></li>
            <li id="dir"><a href="itteam.php">IT TEAM MEMBERs </a></li>
            <li id="dir"><a href="netcfg.php">NETWORK CONFIGURATION</a></li>
            <li id="dir"><a href="nrmain.php">ROUTER SETUP MAIN</a></li>
            <li id="dir"><a href="nryouth.php">ROUTER SETUP YOUTH</a></li>            
            <li id="dir"><a href="nrlead.php">ROUTER SETUP LEADERSHIP</a></li>
            <li id="dir"><a href="webdef.php">SHAREFAITH WEB INFORMATION</a></li> 
            <li id="dir"><a href="paypal.php">PAYPAL INFORMATION</a></li>             
				<li id="dir"><a href="wip.php">FCF OFFICE EQUIPMENT</a></li>
 				<li id="dir"><a href="sysconsole.php">SYSTEMCONSOLE WEB SERVER - XAMPP</a></li> 
				<li id="dir"><a href="tte.php">Trouble Ticket Express (TTE)</a></li>
				<li id="dir"><a href="http://192.168.1.105:88/cgi-bin/setup.cgi">Submit TTE Ticket</a></li> 
				<li id="dir"><a href="logos.php">LOGOS II CHURCH MANAGEMENT</a></li>
				<li id="dir"><a href="sk.php">ServantKeeper CHURCH MANAGEMENT</a></li> 				
				<li id="dir"><a href="logmein.php">ROMOTE ACCESS TO FCF COMPUTERS</a></li> 
				<li id="dir"><a href="fcbkup.php">BACKUPS FILE BACKUP PC 4.1</a></li> 
				<li id="dir"><a href="pcosrecover.php">OPERATING SYSTEM RECOVERY</a></li> 
				<li id="dir"><a href="software.php">PURCHASED SOFTWARE</a></li> 
        </ul>
   </div>
   <div class="col-lg-8">
      <h2>Welcome to FCF IT Documentation Website!</h2>
      <p>This Site contains IT Documentation and requires a valid User login ID/Password to view some pages.</p>
      <p>See Site Administrator for a User ID/Password</p>
   </div>
  </div> 
</div>

 <?php  
   include('templates/footer.html'); // Include the footer.
?>