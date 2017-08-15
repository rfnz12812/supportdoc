<?php // Script 8.4 logmein.php
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
             <h2 class="center">ROMOTE ACCESS TO FCF COMPUTERS</h2>

              Access to FCF computers is currently being provided by a software called LogMeIn</br> 
              using a web browser.</br>  
              Contact Shawn Kelly 781-638-9079</br>
              URL – www.logmein.com</br>
              User – itteam@fcfellowship.org</br>
              Pswd Qw2fcf!</br>	
              </br>	
              Start your web browser (IE) and enter this URL logmein.com.</br>  
              The logon screen shown below will be presented to your browser.</br>  
              Enter USER as it_team@fcfelllowship and password as ITremote.</br>  
              Remember case is important.</br>
             </br></br>

             If the logon credentials are entered correctly, you will be presented the screen</br> 
             below in your browser.</br>
             This is the list of computers currently registered for remote capability.</br>   
             Place your cursor over the control labeled, “Remote Control” for the computer</br> 
             you wish to logon into remotely and double click you mouse.</br> 
             </br>
  
             After selecting the computer, a connection process will take place</br> 
             which will result in a USER logon screen being presented.</br>   
             The USER credentials requested at this point are the  local user accounts.</br>   
             You may logon to any user you wish providing you know the correct ID and PASSWORD.</br>  
             Remember these are the USER account credentials as setup by USER accounts.</br>
             </br>
             Each computer has been setup with a personal password to provide</br> 
             further protection from unwanted remote access.</br>  
             Only a specific set of characters taken from the original password are</br> 
             requested as indicated by drop down list.</br>  
             In the example below the 1st,3rd and 6th characters are entered:</br>  
             Password -IT03glm6</br>
             Position   -12345678</br>
             </br>
             Assuming the correct characters are entered, the logon screen is presented.</br> 
             To complete the login process, just press the login button.</br>
             </br>
             Fullscreen may be activated by pressing the full screen icon in the upper right corner.</br>
             </br>
             To navigate back to the logmein control menu,</br> 
             place your cursor in the top middle of the screen.</br>  
             An option pull down dialog should appear where you can select the full screen icon</br> 
             again to toggle back to the logmein control screen.</br>
             When finished. To disconnect, press the DISCONNECT button</br> 
             </br></br>
 	       </div>
      </div> 
      
   

      <div class="col-lg-6">
          <div class="text-left" id="webdefdiv">
               <h2 class="center">Installed Computers</h2>
               <p>             
               <pre>Computer name	LogMeIn Password</pre></br>
               FCFoffice...............v1orfcf</br>
               FCFoffice2..............sh02fcf</br>
               SANCTUARY...............rfteam</br>
               ITSYSTEMCONSOLE.........IT03glm6</br>
               MINISTRY2...............lmjcbl06</br>
               MINISTRYPC..............fcfchild03</br>
               </br></br>
               </p>
          </div>
      </div>      
   </div>
</div>
 
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>