<?php

$ServerName ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "shoppingcart" ;
$conn = mysqli_connect ($ServerName,$dbUsername,$dbPassword ,$dbName    );

if(!$conn){

die("Connection failed: ". mysqli_connect_error());

}

?>


