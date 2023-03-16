<?php

$ServerName ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "shoppingcart" ;
$conn = mysqli_connect ($ServerName,$dbUsername,$dbPassword ,$dbName    );

if(!$conn){

die("Connection failed: ". mysqli_connect_error());

}


function theheader($title) {
	//this will be the number of how many items are put next to the cart number or wishing list
$cartnumber = isset($_SESSION['shoppingcart']) ? count($_SESSION['shoppingcart']) : 0;
$wishinglistnumber = isset($_SESSION['wishinglist']) ? count($_SESSION['wishinglist']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="yeni.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	</head>
	<body>
        <header>
		
		
           <div class = "navbar">
		   		<button class="closemobilemenubutton" onclick="closemenu()" id = "closemobilebutton" style = "font-size:20px;">&#10006; </button>
		 <button class="openmobilemenubutton" onclick="openmobilemenu()" id = "openmobilebutton" style = "font-size:20px;">&#9776; </button>

		<a href = "index.php" >	<img src ="images/wear.png" class = 'pic' width = "250px" style= "margin-left:130px;" ></a>
	
		
		<nav>
			<ul class = 'hidelinks'>
				<li><a href = "index.php">Home</a></li>
				<li><a href = "index.php?page=allproducts">Products</a></li>
				<li><a href = "index.php?page=report">Report</a></li>
				<li><a href = "index.php?page=account">Account</a></li>
				<li><a href = "index.php?page=loginpage">Login </a></li>
			</ul>
			<div class = 'rowicons'>
				<div class="iconsrow">
			 <span class="fas fa-shopping-cart iconsrow"></span>
      <span class="text">$cartnumber</span>
                </div>
				<div class="iconsrow">
                   <span class="fas fa-heart iconsrow"></span>
      <span class="text">$wishinglistnumber</span>

					
                </div>
			</div>
		</nav> 
		
	</div>
	</div>
	
	<div class = 'mobilenav' id = 'mobilenav'>
		<nav>
			<ul id = 'hide'>
				<li><a href = "index.php">Home</a></li>
				<li><a href = "index.php?page=allproducts">Products</a></li>
				<li><a href = "index.php?page=report">Report</a></li>
				<li><a href = "index.php?page=account">Account</a></li>
				<li><a href = "index.php?page=loginpage">Login </a></li>
			</ul>
		</nav>
	</div>
	
        </header>
		
		</div>
     
		
EOT;
}

function template_header3($title) {
	
$cartnumber = isset($_SESSION['shoppingcart']) ? count($_SESSION['shoppingcart']) : 0;
$wishinglistnumber = isset($_SESSION['wishinglist']) ? count($_SESSION['wishinglist']) : 0;
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
				<li><a href = "index.php">Home</a></li>
				
			</ul>
		
		</nav> 
		
	</div>
	</div>
        </header>
        <main>
		
	
	

		
EOT;
}

function template_header4($title) {
	

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
				<li><a href = "index.php">Home</a></li>
				
			</ul>
		
		</nav> 
		
	</div>
	</div>
        </header>
        <main>
		
	
	

		
EOT;
}




















function template_footer() {

echo <<<EOT
        		
				<div class =  "footer">
					<div class = "socialmedia">
            
				</div>
			
							<div class ="footer-col-1">	
							<div class = 'footerparts2'>
								<img src = "images/wear.png" width = "250px"  >
							</div>
							<div class = 'footerparts22'>
							<h3> Download Our App</h3>
								<p id ="p">Download App for Android and IOS Mobile phone.    </p> 
							</div>
							</div>		
				

						<div class = 'footercontent' >
							<div class ="footerparts">	
								<h3> Useful Links</h3>
								  <ul class = 'links'> 
									<li>Coupons </li>
									<li>Blog Post </li>
									<li>Return Policy </li>
									<li> Help and Contact Us</li>
								<a href = 'index.php?page=adminloginpage'	<li>Admin Panel</li></a>
								</ul>
							</div>
								<div class ="footerparts">	
								<h3> Follow Us</h3>
								  <ul class = 'links'> 
									<li>Facebook </li>
									<li>Twitter </li>
									<li>Instagram </li>
									<li> Youtube</li>
								</ul>
							</div>
						
				</div>	
		
			</div>
			
		
			
			
		</div>	
		</body>
	</html>
	<script>
	function openmobilemenu(){
		 document.getElementById("openmobilebutton").style.visibility = "hidden";
		 document.getElementById("closemobilebutton").style.visibility = "visible";
		   document.getElementById("mobilenav").style.visibility = "visible";
		     document.getElementById("mobilenav").style.marginTop = "20px";
			 document.getElementById("mobilenav").style.height = "250px";
			   document.getElementById("hide").style.visibility = "visible";
			 document.getElementById("mobilenav").style.transition = "all 0.5s";
			 			 document.getElementById("hide").style.height = "250px";
		
		
	}
	
	function closemenu(){
			   document.getElementById("closemobilebutton").style.visibility = "hidden";
			   document.getElementById("openmobilebutton").style.visibility = "visible";
	  document.getElementById("mobilenav").style.height = "0";
	    document.getElementById("hide").style.visibility = "hidden";
    document.getElementById("mobilenav").style.visibility = "hidden";
	}
	
	
	</script>

	<style>

	*{
		margin:0;
		padding:0;
	}

	#p{
		color:white;
	}
.rowicons{
	
	display:flex;
	flex-direction:row;
	margin-left:700px;
	position:relative;
	bottom:20px;
	
}

.iconsrow{
		margin-right:5px;
	        vertical-align: middle;
				position:relative;
		right:40px;
}
@media only screen 
and (min-width : 500px)  {
  #openmobilebutton{
    display: none;
  }
	.mobilenav {
	    display: none;	
		margin:0px;
		padding:0px;
		
	}

	
	.navbar .pic{
		width:250px;
		position:relative;
		left:-30px;
		bottom:20px;
		
	}
	
		.navbar nav{
		
		position:relative;
		left:-250px;
	
		
	}
	
	.navbar li{
		
		position:relative;
		margin-right:30px;
		font-family:quicksand;
		text-transform:uppercase;
	
	}
}
.iconsrow span{
	display:inline-block;
}
.footerparts .links{
	list-style:none;
}

.footerparts {
margin-left:30px;
color:white;
}
.footerparts22{
	position:relative;
	top:40px;
	color:white;
}

.mobilenav {
	
		background-image:linear-gradient(360deg, #dee1e1 10%, #f4f4f4 360%);
	}
@media only screen and (max-width:700px){



	.socialmedia{
		position:relative;
		left:30px;
		width:100%;
	}
	.mobilenav {
		text-transform:uppercase;
visibility:hidden;
  margin-top: -217px;
     position: sticky;
 height:250px;
		z-index:10;
		width:100%
		background-color:red;
		display:flex;


	
	}
	
	.mobilenav ul li{
	
		position:relative;
		right:70px;
		top:30px;
		font-size:20px;
		font-weight:bold;
		font-family:quicksand;
			color:black;
		display:block;
	}
	.rowicons{
		position:relative;
	
margin-left:-250px;
margin-top:40px;
font-size:20px;
}
	
		.hidelinks{
		display:none;
	}
	
}
.openmobilemenubutton {

 width:100%;
  cursor: pointer;
background-color:transparent;
  color: black;
  padding: 20px 15px;
  border: none;
  position:relative;

left:270px;
}

.closemobilemenubutton{
	visibility:hidden;
	position:relative;
	left:318px;
	 width:100%;
  cursor: pointer;
background-color:transparent;
  color: black;
  padding: 20px 15px;
  border: none;
  position:relative;

}
.footer {
    font-family:quicksand;
	color:white;
  bottom:0;
 height:500px;
    width: 100%;
position:relative;
top:500px;
background-color: #485461;
background-image: linear-gradient(315deg, #485461 0%, #28313b 74%);

}
.footer li {
    font-family:quicksand;
	color:white;
	

}

.footer-col-4{
	position:relative;
	left:300px;
	bottom:18px;
	font-family:quicksand;
}
	
.footer-col-3{
	position:relative;
	top:110px;
	padding:24px;
	font-family:quicksand;
}
		
	.footer-col-2{
	position:relative;
	top:120px;
	font-family:quicksand;
	
}

.footer-col-1{
	position:relative;
	
	font-family:quicksand;
	display:flex;
	flex-direction:row;
	color:white;
		
	
}

.socialmedia{
	height:50px;
	background-color:black;
	position:relative;
	left:0px;
	width:100%;
}
	.fa fa-twitter {
  background: #55ACEE;
  color: green;
position:relative;
left:300px;
}
	

.span1{
	position:relative;
	bottom:16px;
	left:50px;
	
}
.navbar nav ul li{
position:relative;
right:100px;


font-size:14px;

}
.pic{
	margin:20px;
position:relative;
left:-260px;
	width:200px;
}

.footercontent{
	display:flex;

	flex-direction:row;
	position:relative;
	left:50px;
	
}
@media only screen and (max-width: 700px) {
	.footer{
		height:550px;
		
	}
	.footercontent{
	display:flex;

	flex-direction:column;
	position:relative;
	left:50px;
	
}
	.socialmedia{
		width:100%;
		
	}
.pic{
	position:relative;
	right:180px;
	
}
}
.link-icons1{

position:relative;
right:100px;

}
.link-icons2{

position:relative;
left:-30px;
bottom:20px;

}


</style>
	
	
EOT;



}
?>

