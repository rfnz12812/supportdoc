<?php
session_start();
$SESSION = [];
session_destroy();
header("location:index.php")
?>