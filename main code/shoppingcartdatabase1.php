<?php
$ServerName ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "shoppingcart" ;
$conn = mysqli_connect ($ServerName,$dbUsername,$dbPassword ,$dbName    );

if(!$conn){

die("Connection failed: ". mysqli_connect_error());

}






function template_header5($title) {
	// Get the amount of items in the shopping cart, this will be displayed in the header.

echo <<<EOT
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>$title</title>
		<link href="yeni.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
		
           <div class = "navbar">
		<div class = "logo">
		<a href = "index.php" >	<img src ="images/wear.png" width = "250px" style= "margin-left:130px;" ></a>
		</div>
		<nav>
			<ul>
				<li><a href = "index.php">Back</a></li>
				
			</ul>
			
		</nav> 
		
	</div>
	</div>
        </header>
        <main>
		
	
	

		
EOT;
}









?>
