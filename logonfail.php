<?php 
session_start();
// Script 8.4 - logonfail.php
/* This is the home page for this site. 
It uses templates to create the layout. */

// Include the header:
include('templates/header.html');
// Leave the PHP section to display lots of HTML:
?>
<div class="container">
   <div class="text-center">
      <h2>User Not Registered</h2>
      <p>You may not access Directory</p>
      <img src=images/network-clipart-canstock6901751.jpg>
   </div>
</div>
 
<?php // Return to PHP.
   include('templates/footer.html'); // Include the footer.
?>