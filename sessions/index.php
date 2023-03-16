<?php
session_start();
include 'shoppingcart.php';
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'wearhomepage';

include $page . '.php';
?>