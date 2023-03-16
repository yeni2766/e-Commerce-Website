<?php
require_once 'databaseadminsql.php';
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION['adminusername']))   header("location: ../index.php?page=adminloginpage");

// Unset all of the session variables
session_start();
// Destroy username.
unset($_SESSION["adminusername"]);
unset($_SESSION["wishinglist"]);
unset($_SESSION["shoppingcart"]);
// Redirect to login page
header("location:index.php");
exit;
?>