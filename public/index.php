<?php 

ob_start();

echo header( "location: app/views/layout/loginPage.php");
exit;

ob_end_flush();
?>