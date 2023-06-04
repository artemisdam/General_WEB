<?php
//The session_start() function starts the session and allows the use of session-related functions and variables.
//The unset($_SESSION["id"]) line removes or destroys the session variable named "id".
//The unset($_SESSION["name"]) line removes or destroys the session variable named "name".
//The header("Location:index.php") line sends an HTTP header to redirect the user to the "index.php" page.

// Start the session
session_start();

// Unset or destroy the session variables named "id" and "name"
unset($_SESSION["id"]);
unset($_SESSION["name"]);

// Redirect the user to the "index.php" page
header("Location:index.php");
?>
