<?php 
session_start();
$sname = $_SESSION['name'];
$slvl  = $_SESSION['level']; // session level stored as string 
if ($slvl != "all") {     //  convert to int
	header('location: accno.php');
}
// Script 8.4 - nrMain.php
/* This is the home page for this site. 
It uses templates to create the layout. */

// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
?>
<div class="container">
   <div class="text-left">
   
   <h1 class="center">Main Router</h1><br>
  

<p class="myscroll">
NETGEAR ROUTER SETUP</br>
ROUTER IS FUNCTIONING AS A GATEWAY TO THE INTERNET.</br>
ROUTER LOGIN URL: WWW.ROUTERLOGIN.NET</br>
PASSWORD: Rfnz4041</br>
SERIAL # 32J34556010C0</br>
SECURITY CONFIGURATION</br>
SSID			NETGEAR94 2.4GB</br>
WIRELESS SECURITY:</br>
MODE 			WPA PRE-SHARED KEY  (AES)</br>
WPA SPARED KEY	ORANGEBOLLOON021  LOWERCASE</br>
<img src=images/access_point.png alt="Router" style="float:right;width:400px;height:400px;">
WPA ALGORITHM	TKIP</br>
WIRELESS AP ON	</br>
SECURITY CONFIGURATION</br>
SSID			NETGEAR-5G 5.0GB</br>
WIRELESS SECURITY:</br>
MODE 			WPA PRE-SHARED KEY</br>
WPA SPARED KEY	ORANGEBOLLOON021   LOWERCASE</br>
WPA Algorithm	TKIP</br>
Wireless AP on</br>
IP address		24.140.87.182</br>
Subnet Mask		255.255.248.0</br>
Gateway IP		24.140.8.1</br>
Primary DNS		24.140.1.3</br>
Secondary DBS		24.140.1.2</br>
SSID Broadcast enabled</br>
DHCP range		192.168.1.2-150</br>

Port Forwarding</br>
o	itservice Name helpdesk</br>
o	Port		5000</br>
o	Target IP	Web Server SystemConsole  192.168.1.36</br>
o	Service Name qsee6036</br>
o	Port		6036</br>
o	Target IP	FCF Camera system  192.168.1.46</br>


</p>
   </div>
</div>
 
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>