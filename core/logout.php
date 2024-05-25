<?php
session_start(); // Start the session to access session variables

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: http://localhost/hotel_management/"); // Replace "login.php" with the actual login page filename
exit;
?>
