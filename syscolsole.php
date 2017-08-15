<?php // Script 8.4 sysconsole.php
session_start();
$sname = $_SESSION['name'];
$slvl  = $_SESSION['level']; // session level stored as string 
if ($slvl != "sys") {     //  convert to int
	header('location: accno.php');
}
/* This is the home page for this site. 
It uses templates to create the layout. */

// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
?>
<div class="container">
   <div class="text-left">
   
   <h1 class="center">PayPal Information</h1><br>
  

<p class="myscroll">
SYSTEMCONSOLE WEB SERVER - XAMPP </br>
WebSite</br>
 Login</br>
	URL http://24.140.87.182:5000/wordpress/wp-login.php</br>
	User itteam</br>
	Password RFfcf05!</br>
Home Page</br>
	URL http://24.140.87.182:5000/wordpress/</br>
</br>
HelpDesk Email setup for Spiceworks</br>
itteam@fcfellowship.org  FcFit!06</br>
</br>
XAMPP HelpDesk  Trouble Ticket Express</br>
	Router Port Forwarding</br>
	Service Name websup</br>
	Port		5000</br>
	Target IP	Web Server SystemConsole 192.168.1.36</br>
	URL http://24.140.87.182:5000/cgi-bin/ttx.cgi   --- Access TTX login screen</br>
	URL http://24.140.87.182:5000/cgi-bin/setup,cgi   --- Admin password  	fcf1102it</br>
	URL http://24.140.87.182:5000	</br>
		XAMPP Credentials  to access homepage</br>
			ID-FcFWeb</br>

</p>
   </div>
</div>
 
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>