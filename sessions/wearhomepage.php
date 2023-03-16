<?php




// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION['username']))   header("location: ../index.php?page=login");
?>

<?php

//this is the sql that i will use that will order the products by how many there is
$sql1 = 'SELECT * FROM products';
$result1 = $conn->query($sql1);


// Fetch the products from the database
$products = $result1 -> fetch_all(MYSQLI_ASSOC);
// Get the total number of products

?>
<?=theheader1('Home')?>

<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<div class="mainheader">
    <h2>Womens Collection 2021</h2>
    <button class = "btn1">SHOP NOW</button>
	
</div>
<div class="section">
    <h2 style=" margin-left:-30px;"></h2>
	<div class = "row1">
	<div class ="column1">
	<img src = "../images/model2.jpg"> 
	<h1 class = "h1">Men </h1>
	</div>
   <div class ="column1">
	<img src = "../images/model1.jpg"> 
	<h1 class = "h2" >Women </h1>
	</div>
	 <div class ="column1">
	<img src = "../images/model3.jpg"> 
	<h1 class = "h3" >Kids</h1>
	</div>

</div>
</div>

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
















<style>
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
.column1 img:hover{
 -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, .5), 0 2px 3px rgba(0, 0, 0, .5);
}
.row3 {
  display: inline-block;
}


.row3{
	
	position:relative;
	top:70px;
	left:150px;
	
	
}


.column img{
	border: 1px solid #DCDCDC	;
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





.column1 {
	position:relative:
	top:100px;
  float: left;
  width: 33.33%;


}
.column1 img{
	border: 1px solid #DCDCDC	;
}

.row1::after {
  content: "";
  clear: both;
  display: table;
   
   
}
.row1 {
 
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

html {
  overflow-x: initial !important;
}


  html, body {
    max-width: 100%;
    overflow-x: hidden;
}








</style>
<?=template_footer()?>

<style>

.mainheader{
	height:500px;
	background-image:url("../images/1.jpg");
	
	color:black;
	position:relative;
	bottom:50px;
	
	
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
	margin-top:290px;
	margin-left:-360px;
	height:40px;
	width:100px;
	border-radius:20px;
	background-color:#1E90FF;
	border:none;
	padding:5px;
	color:white;
}


 .section h2 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
	border-bottom: 1px solid black;

}
.mainheader p {
	display: inline-block;
	margin: 0;
	width: 1050px;
	font-size: 24px;
	color: black;
	position:absolute;
	left:640px;
	bottom:230px;
	font-family:Quicksand;

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


</style>
<style>
@media only screen and (max-width: 1366px){
	.featured{
		
width:100%;
		
	}
	
	main .section h2 {
	display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	position:relative;
	left:28px;
	border-bottom: 1px solid black;
	width:100%;

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
	left:250px;
	
	
}




.products :hover {
transform:translateY(-5px);


}
.column img:hover{
	 -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, .5), 0 2px 3px rgba(0, 0, 0, .5);
   
    box-shadow: 0 2px 10px rgba(0, 0, 0, .5), 0 2px 3px rgba(0, 0, 0, .5);

	
}








}
</style>
