<?php
//connection create
include("./includes/connection.php");
//create the session
session_start();

// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 

?>