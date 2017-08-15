<?php // Script 8.4 logos.php
session_start();
$sname = $_SESSION['name'];
$slvl  = $_SESSION['level']; // session level stored as string 
if ($slvl != "all") {     //  convert to int
	header('location: accno.php');
}
/* This is the home page for this site. 
It uses templates to create the layout. */

// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
?>

<div class="container">
    <div class="row">
      <div class="col-lg-6 active"> 
         <div class="text-left" id="webdefdiv"> 
             <h2 class="center">Account Information and Setup</h2>
			             
             <p style="color: Red">Account Information:</p>
               <p>
            	URL:      Website: www.logoscms.com</br>
               ID:       9801</br>
               Password: 9801</br>
               Serial number for Organization page: 2014-9A-103I</br>
              </p>
             <p style="color: Red">Software Install:</p> 
             <p>
               Installation Codes</br>
               Facility Scheduler:       fs-693a5d2</br>
               Multi-User:               fs-8531711</br>
					User Reports:             fs-8756433</br>
					</br>
					Logos II Church/Donor Management</br>
					 Church/Donor Management: cm-8c9jd2</br>
					 User Reports:            cm-924572 (load before Premier User Reports)</br>
                Premier User Reports:    cm-3724539</br>
		          Multi-User Function:     cm-4626489</br>
		          Event Register:          cm-946321</br>
		          Attendance- check-in:    cm-3739762</br>
					 
               <p style="color: Red">Users Installed</p> 
             </p>
             <p>
             General Users:</br>
               itteam 		   PW:fcf1102it</br>
	            office admin	PW:grace</br>
	            jen		      PW:katydid705</br></br>
	            Finance Users:</br>	
	            Passwords are NOT available</br>	
	               Violet Slage</br>  
	               Dave Bailey as backup</br>
			         Roberta Reese Trainer and third backup</br></br>
			      AWANA and Children Users:</br>
			         children ministry	 PW:gracie714</br>
			    </p>
			   </br>
 	       </div>
      </div>
      
<div class="col-lg-6">
          <div class="text-left" id="webdefdiv">
               <h2 class="center">Logos Computer Environment</h2>
               <p class="center">             
                  Logos is installed on OFFICE2 computer in the following directory c:\logoswin. 
                  Remote access is provided by Mapping a drive to //office2/logoswin/logos.exe.
                </p>  
                <img src=images/logosimg.jpg alt="Network" style="margin-top:-50px;float:right;width:550px;height:800px;">
          </div>
</div>       
  
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>