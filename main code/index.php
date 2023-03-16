<?php
session_start();
//this makes the main page the landing page
include 'shoppingcartdatabase.php';
$landingpage = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'wearhomepage';

include $landingpage . '.php';
?>