<?php // Script 8.4 tte.php
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
             <h2 class="center">Trouble Ticket Express</h2>
			    <p>
			    <p style="color: Red">Trouble Ticket Express Install</p>
             Trouble Ticket Express Install</br>
             SCRIPT DIRECTORY ITTEAM.FCFELLOWSHIP.ORG/CGI-BIN</br>
             1. UNZIP TTX.ZIP ON YOUR LOCAL DRIVE.</br>
             2. EDIT *.CGI FILES IF NEEDED: THE VERY FIRST LINE CONTAINS FULL PATHNAME TO PERL.</br> 
                DEFAULT SETTINGS WORK ON MOST SYSTEMS, BUT YOU SHOULD CHECK WITH YOUR ADMINISTRATOR</br> 
                IF NOT SURE.</br>
             3. CREATE SCRIPTS DIRECTORY (IF DOES NOT EXIST) ON YOUR WEB SERVER.</br> 
                MAKE SURE WEB SERVER CAN EXECUTE SCRIPTS FROM THIS DIRECTORY.</br> 
                SET ACCESS RIGHTS (UNIX SERVERS ONLY) TO 755.</br>
                C:\xampp\cgi-bin
             4. UPLOAD ALL *.CGI AND *.PM FILES TO THE SCRIPTS DIRECTORY ON YOUR WEB SERVER</br> 
                IN ASCII MODE. PLEASE NOTE, YOU MUST USE ASCII MODE WHEN UPLOADING SCRIPTS</br> 
                TO YOUR WEB SERVER.</br>
             5.( UNIX ONLY) SET 0755 MODE FOR ALL *.CGI FILES YOU HAVE UPLOADED TO YOUR SERVER.</br>
             6. UPLOAD ALL *.GIF FILES TO THE SCRIPTS DIRECTORY DIRECTORY IN BINARY MODE.</br>
             7. ENTER URL OF SETUP.CGI SCRIPT INTO YOUR BROWSER ADDRESS STRING AND HIT ENTER KEY.</br> 
               YOU SHOULD SEE SYSTEM SETUP WIZARD SCREEN. IF YOU SEE SOMETHING ELSE,</br> 
               PLEASE REFER TO SETUP TROUBLESHOOTING SECTION FOR MORE INFO.</br>
              </br>
              URLHTTP://192.168.1.6:88/CGI-BIN/SETUP.CGI</br>
              PW techRFpass</br></br>
              Email Setup</br>
              SMTP Server: mailout.sssnet.com</br>
              POP3 User ID: fcfbkup@sssnet.com</br>
              POP3 PW: SjfCf1303</br> 
              </br>
             Trouble Ticket Express is now setup to run under local server on systemconsole.</br>
             </br></br>
			   </p>         
   	   </div>
      </div> 
      
   

      <div class="col-lg-6">
          <div class="text-left" id="webdefdiv">
               <h2 class="center">Registered Users</h2>
               <p>
               OPERATOR.IDS......EMAIL.ADDRESS....................LOGIN.PASSWORD</br>
               rich........................rfnz12812@sssnet.com.............r01f02</br>      
               MKager...................pastormikejedimaster@gmail.com...fcfmike</br>  
               LogTicket...............fcf@fcfellowship.org.............LogTicket</br>        
               FRobinson...............rhino60@sssnet.com...............SongLeader</br>
               SSalewsky...............ssalewsky@fcfellowship.org.......SsFcF</br>
               BLoomis...................fcf@fcfellowship.org.............JcFcF</br>
               </br>
               URL:</br>
               Log Ticket</br>
                 http://192.168.1.6:88/cgi-bin/ttx.cgi</br>
               </br>
               Setup</br>	
               http://192.168.1.6:88/cgi-in/setup.cgi</br>
               </br>
               </p>  
          </div>
      </div>      
    </div>
</div>

 
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>