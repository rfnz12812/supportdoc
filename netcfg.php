<?php // Script 8.4 - netcfg.php
/* This is the home page for this site. 
It uses templates to create the layout. */

// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
?>
<div class="container">
   <div class="text-center">
   
   <h1 class="center">NETWORK CONFIGURATION</h1></br>
   <h2>Massillon Cable SSSNET.COM is our ISP provider </h2>
	</br>
	<p>Our physical configuration is as follows:</br>
	SSSNET modem and Backbone Switch are located in phone room</br>
	Main Router is set to automatically request IP info from SSSNET.com</br>
	Other Routers are configured as APs</p>   
 	<img src=images/FCFNetwork.jpg alt="FCF Network" style="float right>
   </div>
</div>
 
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>

 