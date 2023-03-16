
<?php

//this is the sql that i will use that will order the products by how many there is
$sql1 = 'SELECT * FROM products';
$result1 = $conn->query($sql1);


// Fetch the products from the database
$products = $result1 -> fetch_all(MYSQLI_ASSOC);
// Get the total number of products

?>
<?=theheader('Home')?>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
 
</head>
<div class="mainheader">
<div class = 'menu'>
<div class = 'items'>
    <h1>Womens Collection 2021</h2>
</div>
<div class = 'items'>
    <button class = "btn1">SHOP NOW</button>
</div>
</div>

</div>


<hr class  = 'hr'>

	<div class = "row1">
	<div class ="column1">
	<img src = "images/model2.jpg"> 
	<h1 class = "h1">Men </h1>
	</div>
   <div class ="column1">
	<img src = "images/model1.jpg"> 
	<h1 class = "h2" >Women </h1>
	</div>
	 <div class ="column1">
	<img src = "images/model3.jpg"> 
	<h1 class = "h3" >Kids</h1>
	</div>

</div>
<hr class  = 'hr'>
<div class="products">
    <h1 class = "productoverview">Product Overview</h1>
    
    <div class="products">
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=individualproductspage&id=<?=$product['id']?>" class="product">
		<div class  = "row3" >
			<div class = "column">
            <img src="<?=$product['img']?>" width="200" height="300" alt="<?=$product['name']?>">
			</div>
			
            <span class="name"><?=$product['name']?></span><br><br>
            <span class="price">
                &pound;<?=$product['price']?>
            
            </span>
        </a>
		
		</div>
		
        <?php endforeach; ?>
    

</div>

</div>














<style>
.mobile{
	position:relative;
	left:-300px;
	max-width:500px;
	border:1px solid black;
}
*{
	
	margin:0;
	box-sizing:border-box;
	padding:0;
	
}


.column1{

display:inline-block;

}

  html, body {
	    scroll-behavior: smooth;
width:100%;
height:100%;

}


.menu{

	width:100%;
	height:300px;
	position:relative;
	top:100px;
}
.menu .items{
position:relative;
left:700px;
margin-top:50px;
font-family:quicksand;
}

.menu{

	width:100%;
	height:300px;
}

.menu h1{
color:white;
}
	@keyframes openinganimation{
		
		0%{opacity:0; transform: translateY(-100px)}
	100% {opacity:1; transform: translateX(0px)}
	}
	
	
	.menu h1{
		
			animation:openinganimation 0.5s ease;
	}
@media only screen and (max-width: 700px) {
.mainheader{
	position:relative;
	bottom:100px;
}

.menu{
	position:relative;
	right:700px;
	padding-left:15px;
	top:200px;
}
.menu h1{
color:white;
font-family:quicksand;
}
.row1{
	margin-top:40px;
}
.column1{
flex-direction:column;
position:relative;
right:40px;
transform:scale(0.9);
	margin-top:-30px;
}
.products{
	position:relative;
	right:30px;
}

body{
width:100%;
height:100%;
margin:0;
padding:0;
overflow-x:hidden;
}
}

.productoverview{
	font-family:Quicksand;
	
	position:relative;
	left:50px;
	top:50px;
}
.row3{
	position:relative;
	margin-right:50px;
margin-top:50px;
 transition: transform 0.5s ease;


}

.row3 {
  display: inline-block;
}
.products :hover {
transform:translateY(-5px);


}
.column img:hover{
	 -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, .5), 0 2px 3px rgba(0, 0, 0, .5);
   
    box-shadow: 0 2px 10px rgba(0, 0, 0, .5), 0 2px 3px rgba(0, 0, 0, .5);

	
}

.row3{
	
	position:relative;
	top:70px;
	left:150px;
	
	
}


.column img{
	border: 1px solid rgba(255, 255, 255, .1);
}
.hr{
	border:1px solid black;
}






.h1{
font-family:Quicksand;	
position:relative;
bottom:200px;
left:20px;

}

.h2{
font-family:Quicksand;	
position:relative;
bottom:200px;
left:260px;
	
}

.h3{
font-family:Quicksand;	
position:relative;
bottom:200px;
left:20px;
	
}




.column1 img{
	border: 1px solid #DCDCDC	;
}
.column1 img:hover{
 -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, .5), 0 2px 3px rgba(0, 0, 0, .5);
}


.row1 {
	width:100%;

    padding: 70px 40px 70px;
}

.row {
  display: inline-block;
}

.column {
  flex: 40.33%;
  padding: 10px;
}

.row{
	
	position:relative;
	top:150px;
	left:100px;
	
	
}









</style>
<?=template_footer()?>

<style>

.mainheader{
	height:500px;
	background-image:url("images/1.jpg");
	  background-size: cover;
	color:black;
	position:relative;
	bottom:100px;
	width:100%;
	
}

 .mainheader h2 {
	display: inline-block;
	margin: 0;
	width: 1050px;
	font-family:Quicksand;
	font-size: 45px;
	color: black;
	padding-bottom: 10px;
	position:relative;
	left:680px;
	bottom:120px;
	text-aligh:center;
}

.btn1{
	
	height:40px;
	width:100px;
	border-radius:20px;
	background-color:#1E90FF;
	border:none;
	padding:5px;
	color:white;
}


span{
	position:relative;
	left:50px;
	font-family:quicksand;
}


.span1{
	position:relative;
	bottom:16px;
	left:50px;
	
}
{
border:1px solid black;
}

</style>
<style>

</style>
