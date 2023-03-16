<?php


// Unset all of the session variables
session_start();
// Destroy username.
unset($_SESSION["username"]);
unset($_SESSION["wishinglist"]);
unset($_SESSION["cart"]);
// Redirect to login page
header("location:../index.php");
exit;
?>