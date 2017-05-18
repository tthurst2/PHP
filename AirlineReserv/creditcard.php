<?php 
session_start();
/* save the data for the rest of the session */
$_SESSION['creditcard-data'] = $_POST;
print_r($_SESSION);



session_destroy();

?> <br>