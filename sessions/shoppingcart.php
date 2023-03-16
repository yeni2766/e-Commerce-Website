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
	// Get the amount of items in the shopping cart, this will be displayed in the header.
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
				<li><a href = "index.php?page=products">Products</a></li>
				<li><a href = "index.php?page=report">Report</a></li>
				<li><a href = "index.php?page=Account">Account</a></li>
				<li><a href = "index.php?page=login">Login </a></li>
			</ul>
			<div class="link-icons">
                    <a href="index.php?page=shoppingcartpage">
						<i class="fas fa-shopping-cart" style = "position:relative; left:20px; bottom:15px;"></i><span class = "span1">$cartnumber</span>
					</a>
                </div>
					<div class="link-icons2">
                    <a href="index.php?page=wishinglist">
						<i class="fas fa-heart" style = "position:relative; left:20px; bottom:15px;"></i><span class = "span1">$wishinglistnumber</span>
					</a>
                </div>
		</nav> 
		
	</div>
	</div>
        </header>
        <main>
		
	
	

		
EOT;
}
function theheader1($title) {
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
				<li><a href = "index.php?page=allproducts">Products</a></li>
			
				<li><a href = "index.php?page=youraccountpage">Your Account</a></li>
				<li><a href = "index.php?page=logout">Logout </a></li>
			</ul>
			<div class="link-icons">
                    <a href="index.php?page=shoppingcartpage">
						<i class="fas fa-shopping-cart" style = "position:relative; left:20px; bottom:15px;"></i><span class = "span1">$cartnumber</span>
					</a>
                </div>
				<div class="link-icons2">
                    <a href="index.php?page=wishinglistpage">
						<i class="fas fa-heart" style = "position:relative; left:20px; bottom:20px;"></i><span class = "span1">$wishinglistnumber</span>
					</a>
                </div>
		</nav> 
		
	</div>
	</div>
        </header>
        <main>
		
	
	

		
EOT;
}

function template_header2($title) {
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
				<li><a href = "index.php?page=allproducts">Products</a></li>
				<li><a href = "index.php?page=logoutpage">Logout </a></li>
			</ul>
			<div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart" style = "position:relative; left:20px; bottom:15px;"></i><span class = "span1">$cartnumber</span>
					</a>
                </div>
		</nav> 
		
	</div>
	</div>
        </header>
        <main>
		
	
	

		
EOT;
}
function template_header3($title) {
//this will be the number of how many items are put next to the cart number or wishing list
$cartnumber = isset($_SESSION['shoppingcart']) ? count($_SESSION['shoppingcart']) : 0;

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
			<div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart" style = "position:relative; left:20px; bottom:15px;"></i><span class = "span1">$cartnumber</span>
					</a>
                </div>
		</nav> 
		
	</div>
	</div>
        </header>
        <main>
		
	
	

		
EOT;
}

// Template footer
function template_footer() {

echo <<<EOT
        		<div class = "socialmedia">
                <a href="#instagram" class="instagram">
                    <i class="fa fa-instagram"></i>
                </a>
                  
                <a href="#facebook" class="facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                  
                <a href="#twitter" class="twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                  
                <a href="#linkedin" class="linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
                  
                <a href="#google" class="google">
                    <i class="fa fa-google"></i>
                </a>
                  
                <a href="#youtube" class="youtube">
                    <i class="fa fa-youtube"></i>
                </a>
				
				</div>
				<div class =  "footer">
					
			
							<div class ="footer-col-1">	
								<h3> Download Our App</h3>
								<p id ="p">Download App for Android and IOS Mobile phone.    </p> 
							</div>		
				
							<div class ="footer-col-2">	
								<img src = "images/wear.png" width = "250px"  >
								
							</div>		
						
							<div class ="footer-col-3">	
								<h3> Useful Links</h3>
								  <ul id = "nav1"> 
									<li>Coupons </li>
									<li>Blog Post </li>
									<li>Return Policy </li>
									<li> Help and Contact Us</li>
								</ul>
							</div>
								<div class ="footer-col-4">	
								<h3> Follow Us</h3>
								  <ul> 
									<li>Facebook </li>
									<li>Twitter </li>
									<li>Instagram </li>
									<li> Youtube</li>
								</ul>
							</div>
						
				</div>	
		
			
			
		
			
			
		</div>	
		</body>
	</html>
	<style>




.footer {
    
  bottom:0;
 
    width: 100%;
position:relative;
top:500px;
   
   
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
	top:150px;
	padding:20px;
	font-family:quicksand;
		
	
}

.socialmedia{
	height:50px;
	background-color:black;
	position:relative;
	top:670px;
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
	left:25px;
	
}

</style>
	
	
EOT;



}
?>
<?php
function template_footer1() {
$year = date('Y');
echo <<<EOT
        		<div class = "socialmedia">
                <a href="#instagram" class="instagram">
                    <i class="fa fa-instagram"></i>
                </a>
                  
                <a href="#facebook" class="facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                  
                <a href="#twitter" class="twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                  
                <a href="#linkedin" class="linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
                  
                <a href="#google" class="google">
                    <i class="fa fa-google"></i>
                </a>
                  
                <a href="#youtube" class="youtube">
                    <i class="fa fa-youtube"></i>
                </a>
				
				</div>
				<div class =  "footer">
					
			
							<div class ="footer-col-1">	
								<h3> Download Our App</h3>
								<p id ="p">Download App for Android and IOS Mobile phone.    </p> 
							</div>		
				
							<div class ="footer-col-2">	
								<img src = "images/wear.png" width = "250px"  >
								
							</div>		
						
							<div class ="footer-col-3">	
								<h3> Useful Links</h3>
								  <ul id = "nav1"> 
									<li>Coupons </li>
									<li>Blog Post </li>
									<li>Return Policy </li>
									<li> Help and Contact Us</li>
									<li>Admin Panel</li>
								</ul>
							</div>
								<div class ="footer-col-4">	
								<h3> Follow Us</h3>
								  <ul> 
									<li>Facebook </li>
									<li>Twitter </li>
									<li>Instagram </li>
									<li> Youtube</li>
								</ul>
							</div>
						
				</div>	
		
			
			
		
			
			
		</div>	
		</body>
	</html>
	<style>




.footer {
    
  bottom:0;
 
    width: 100%;
position:relative;
top:500px;
   
   
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
	top:150px;
	padding:20px;
	font-family:quicksand;
		
	
}

.socialmedia{
	height:50px;
	background-color:black;
	position:relative;
	top:670px;
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
	left:25px;
	
}
.navbar nav ul li{
position:relative;
right:200px;




}

.link-icons{

position:relative;
right:100px;

}
.link-icons2{

position:relative;
left:-30px;
bottom:20px;

}


<style>
@media only screen and (max-width: 1366px){
.link-icons2{

position:relative;
left:-90px;
bottom:20px;

}

}

</style>
	
	
EOT;



}
?>