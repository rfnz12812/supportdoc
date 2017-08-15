<?php // Script 8.4 PAYPAL.php
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
             <h2 class="center">Recording Donations</h2>
			             
             
 	       </div>
      </div> 
      

      <div class="col-lg-6">
          <div class="text-left" id="webdefdiv">
               <h2 class="center">Recording PayPal Donations</h2>
                 
          </div>
      </div>      
    </div>
</div>

<div class="container">
  <div class="row">
      <div class="col-lg-6 active"> 
         <div class="text-left" id="webdefdiv"> 
            <h2 class="center">PayPal Setup Information</h2><br>

            <p style="color:red">Initial Paypal Setup:</p>
            <p>
            www.paybal.com/buttonfactory</br>
            Current IDs:  Paypal is registered to this User     </br>.  
            Only this person can make changes to FCF Paypal </br>
            </p>
            
            <p style="color:red">ID info</p>
            <p>
            Primary Users:</br>
            Violet Slage</br>
            Roberta Reese</br>
            </p> 

            <p style="color:red">Email Setup:</p>
            <p> 
            ShareFaith 	fcfdonate@fcfellowship.org</br>
            Phone # on account 330-830-6476</br>
            </p>

            <p style="color:red">Bank Setup:</p>
            <p>
            First National</br>
            Routing 041205518</br>
            Acct # 14700975</br>
            </p>

            <p style="color:red">Excel Macro Location:</p>
            <p>
            The "Personal Macro Workbook" is stored by default in this location:</br>
            C:UsersAdministratorAppDataRoamingMicrosoftExcelXLSTART</br>
            Macro - CreateReport</br>
            </p>
            </br></br>

        </div>
     </div>
  </div>
</div> 
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>