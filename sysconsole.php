<?php // Script 8.4 sysconsole.php
/* This is the home page for this site. 
It uses templates to create the layout. */
session_start();
$sname = $_SESSION['name'];
$slvl  = $_SESSION['level']; // session level stored as string 
if ($slvl != "tech") {     //  convert to int
	header('location: accno.php');
}
// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
?>


<div class="container">
    <div class="row">
      <div class="col-lg-6 active"> 
         <div class="text-left" id="webdefdiv"> 
             <h2 class="center">Website Structure</h2>
			             
             <p style="color: Red">Major Components</p>
               <p>
               Apache is configured to service web requests on port 88.</br>
               PHP is used to provide SESSION control and access to MYSQL services.</br>
               PERL is used to provide Trouble Ticket Express access.</br>
               BOOTSTRAP  is used to provide a structured CSS environment.</br>
               MYCUSTOMCSS is used to provide my custom CSS features.</br>
               </p>
              <p style="color: Red">Web Page Structure</p> 
              Page Sturcture:</br>
              	Header.html - provides links to CSS files and MENU navagation</br>
              	xxxxxx.php  - provides body content</br>
              	Footer.html - provides footer</br> 
              </p>
            	<p style="color: Red">Modules</p>
            	<p>
					accno.php - Access Denied</br>
					confail.php - DataBase Connection Failed</br>
					checklogin.php - Checks if user is regestered in SQL database</br>           	
            	directory.php - Displays links to all pages</br>
            	fcbkup.php - Dispalys backup jobs</br>
            	index.php - Displays Home page</br>
            	itteam.php - Displays IT team members</br>
            	login_success.php - Displays login  success page</br>
            	logon.php - Dispalys login page to enter ID and PASSWORD</br>
            	logmein.php - Displays Logmein page</br>
            	logonfail.php - Dispalys logon failed page</br>
            	logos.php - Displays LOGOS install page</br>
            	logout.php - Displays logout page</br>
            	logsuccess.php - Displays logon successful message</br>
            	netcfg.php - Displays Network configuration</br>
            	nrlead.php - Displays Leadership router configuration</br>
            	mrmain.php - Displays Main router configuration</br>
            	nryouth.php - Displays youth router configuration</br>
            	pcosrecover.php - Displays PC OS backyp/recovery page</br>
            	regdup.php - Displays duplicate user page</br>
            	regfail.php - Displays Registration failed page</br>
            	register.php - Displays Registration page</br>
            	regsuccess.php - Displays Registration success page</br>
            	sfweb.php - Displays ShareFaith WebSite information</br>
            	software.php _ Displays purchased software cost and renewal date</br>
            	sql.php - SQL database configuration page</br>
            	submittte.php - Trouble Ticket Express install<br/>
            	sysconsole.php - This page</br>
            	tte.php - Trouble Ticket Express link</br>
            	wip.php - Work-in-progress page</br>
            	webdef.php - Displays ShareFaith Website information</br>
            	
            	
            	
            	</p>
 	       </div>
      </div> 
      
   

      <div class="col-lg-6">
          <div class="text-left" id="webdefdiv">
               <h2 class="center">WebSite Operation</h2>
               <p> 
               Apache server is running on the SystemConsole listening on port 88. To 
               Access the main page, enter this  URL 192.168.1.6:88/wip2/index.php in your browser.
               This will display the main navagation MENU</br>
               The navigation MENU provides the following links to other pages:</br>
               HOME - index.php</BR>
               DIRECTORY - Displays directory links to other pages</BR>
               LOGON - Displays logon page requesting user ID and PASSWORD and starts a SESSION</BR>
               REGISTER - Allows NEW users to register user ID and PASSWORD</br>
               LOGOUT - Logoff and clear SESSION data</br>
               </br>
               </p>
               <p>
               Some pages are restricted and respond with "Access Denied" unless you have logged on with 
               a User ID and Password that has been previously registered. Security has been implemented 
               using PHP SESSIONS.  During the logon process, after user credentials (ID and PASSWORD) have
               been verified, a SESSION is started to save the ID and access level of this user on the server. 
               The response send back, "logon successful" will also have a SESSION id,  which the client will
               send on subsequent requests.  When a page is requested that is restricted, the client SESSION 
               credentials are accessed and compared to the page access level.  If they are equal,  access is
               allowed,  otherwise, access denied is returned to the client.
               </br>
               Access Levels
               none - allows display to unrestricted pages only
               all  - allows display of restricted pages
               tech - allows display of technical pages 
					</br>
					Selecting the DIRECTORY menu will display links to all pages.  To see restricted pages,
					you must logon with a previously register ID and PASSWORD.
					</br></br>              
               </p>  
          </div>
      </div>      
    </div>
</div>
 


 
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>