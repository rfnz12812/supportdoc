<?php 

// Script 8.4 - directory.php
/* This is the home page for this site. 
It uses templates to create the layout. */

// Include the header:
include('templates/headerrunprog.html');
// Leave the PHP section to display lots of HTML:
?>

<body>
	<input type="button" value="Run Notepad" onclick="RunFile();"/>
 

<?php  
   include('templates/footer.html'); // Include the footer.
?>
 