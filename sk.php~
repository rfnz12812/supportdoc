<?php // Script 8.4 sk.php
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
         This information is required during PC or Mac Software install</br></br>
         	Customer ID: 170563</br>
         	Customer Name: Faith Community ZFellowship</br>
         	Cloud Email: fcf@fcfellowship.org</br>
         	Key: 5VXUE42AHWR9KPAMXBQWABSF56J4HY</br>
          </p>
          <p style="color: Red">Online Office</p> 
          <p>
            Use this Link to setup member online portal</br>
            Login Credentials:</br>
            	email = fcf@fcfellowship.org</br>
            	PW    = qawsplok08</br>
           <a href="https://servantkeeper.com/online-office/fcf1303/">Online Portal Setup Link</a></br></br>
           
           More Online Office Links</br>
           <a href="https://servantpc.freshdesk.com/support/solutions/articles/17000043714-navigating-the-main-list">Navigate Mail List</a></br>
           <a href="https://servantpc.freshdesk.com/support/solutions/articles/17000043715-inviting-your-users">Inviting Your Users</a></br>
           <a href="https://servantpc.freshdesk.com/support/solutions/articles/17000043722-inviting-your-members">Inviting Your Members</a></br></br>
            
            Member portal login URL</br>
            https://servantkeeper.com/member-portal/fcf1303/login</br></br>
          </p>
         
           <p style="color: Red">Sales and Support Contact Information:</p>
			  <p>
			  Jon Haley</br>
           Sales Director</br>
           Sales: 800.773.7570   #112</br>
           jonh@servantpc.com</br></br>

           Servant PC Resources, Inc. 220 Woodward Ave. Lock Haven PA 17745</br>
           Support: 570.748.2800   Fax: 570.748.2223</br>
           www.servantpc.com</br>
           </p>           
        </div>
      </div>
      
<div class="col-lg-6">
          <div class="text-left" id="webdefdiv">
               <h2 class="center">Servant Keeper Software Install</h2>
               <p class="center">             
                   Servant Keeper code must be installed on your PC or Mac.</br></br>
                   You can download the Servant Keeper Cloud installer from the link below.</br>
                   Copy the link below to your web browser to start the download.</br></br>
                   Servant Keeper 8 for Windows</br>
                      downloads.servantkeeper.com/ServantKeeper8CloudSetup.exe</br></br>
                   Servant Keeper 8 for Mac</br>
                      downloads.servantkeeper.com/ServantKeeper8MacCloud.dmg</br></br>
                   Check-In for Servant Keeper 8</br>
                      downloads.servantkeeper.com/ServantKeeperCheckInSetup.exe</br></br>
                   Once the setup program has downloaded follow these steps:</br></br>
  1. Run the setup program by double clicking on the downloaded file.</br>
  2. Go through the steps to complete the installation of Servant Keeper.</br>
  3. Once the installation has completed the program will run and ask you to enter the </br>
     Cloud Data Login Information.</br>
  4. Enter your Cloud Data Login Information and click connect and login and choose your database.</br>
  5. Next if you are a new customer you can begin to use Servant Keeper.</br>
  6. If you are upgrading from an older version of Servant Keeper the database</br> 
     conversion program will open to convert your data to Servant Keeper.</br>
  7. Depending on the size of your previous Servant Keeper database this could take as</br>
     long as a few hours to complete.</br></br></br>
                </p>  
               
          </div>
</div>       
  
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>