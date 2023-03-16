
<?php


if (isset($_GET['id'])) {
	$id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id = '".$id."'";
	$result = mysqli_query($conn, $sql);
	$productitem = $result-> fetch_all(MYSQLI_ASSOC);
    // Fetch the product from the database and return the result as an Array
    
}
$sql = "SELECT * FROM products ORDER BY RAND() LIMIT 2 ";
$result = mysqli_query($conn, $sql);
$recommendation = $result-> fetch_all(MYSQLI_ASSOC);







?>
<html>
<head>

<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<meta charset="utf-8">
    <meta content=
    "width=device-width, height=device-height, initial-scale=1"
          name="viewport">
<title>Products</title>
</head>
<body>
		  <?=theheader('Product')?>
		 <hr class = 'hr3' style = 'position:relative; bottom:95px; width: 85%;  margin: auto; !important;'>
<div class="rightcolumn">
   	<?php foreach ($productitem as $product): ?>
    <img src="<?=$product['img']?>" class = 'small' width="300" height="450"  alt="<?=$product['name']?>">
      
	  <div class="productinfo">
       <h1 class="productname"><?=$product['name']?></h1>
        <span class="price">
		&pound;<?=$product['price']?>
        <p class="descriptionofitem">
             <?=$product['desc']?>
        </p>
		   <form action="index.php?page=shoppingcartpage" method="post" class = "form2">
         <span class = 'Quantity'>Qty:</span>   <input type="number" name="quantityofitem" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="productid" value="<?=$product['id']?>"><br>
			<br>
			 <span class = 'Size'>Size:</span><select name="option" id="selectsize">
			 <option value="" selected disabled hidden>Select a size</option>
			<option value="1">Small</option>
			<option value="2">Medium</option>
			<option value="3">Large</option>
		</select>
            <input type="submit" class = "formbtn" value="Add To Cart">
        </form>
      </div>





</div>
 <?php endforeach; ?>
<div class = 'details'>
<div class = 'detailslinks'>
<ul>
<li>
<a onclick = 'info()'>Additional Information</a>
</li>
<li>
<a onclick = 'shipping()'>Shipping Returns</a>
</li>

</ul>

</div>

<div class = 'box'>
<br>
<p class = 'info' id = 'info' style = 'padding-left:20px;'> Information<br><br>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.
<br>
Fabric & care<br>
Faux suede fabric<br>
Gold tone metal hoop handles.<br>
RI branding<br>
Snake print trim interior
Adjustable cross body strap
Height: 31cm; <br> 
Width: 32cm;<br> Depth: 12cm;<br> Handle Drop: 61cm





</p>
<div id = 'addinfo'>

</div>

<div id = 'shippingreturn'>

</div>





</div>
</div>







<div class="recommendation1">
    <h2 style=" margin-left:-10px; margin-bottom:30px;" >You might be interested in these products</h2>
  

        <?php foreach ($recommendation as $product): ?>

        <a href="index.php?page=individualproductspage&id=<?=$product['id']?>" class="product">
		<div class  = "row" >
			<div class = "column">
            <img src="<?=$product['img']?>" width="200" height="300" class= "images" alt="<?=$product['name']?>">
			</div>
	
            <span class="name"><?=$product['name']?><br><br></span>
            <span class="price">
                &pound;<?=$product['price']?>
                
            </span>
        </a>
		</div>
		
        <?php endforeach; ?>
	
		</div>

<?=template_footer()?>
<script>
function info(){
	
		var shippingreturn = document.getElementById("shippingreturn");
	shippingreturn.style.overflow = "hidden";
	var info = document.getElementById("info").style.visibility = 'hidden';
	
	 var request = new XMLHttpRequest();
  request.onreadystatechange = function() {
    if (request.readyState == 4 && request.status == 200) {
		 
		
     document.getElementById("addinfo").innerHTML = request.responseText;
    }
  };
  request.open("post", "addinfo.php", true);
  request.send();

}

function shipping(){
	
	var shippingreturn = document.getElementById("shippingreturn");
	shippingreturn.style.overflow = "hidden";
	var info = document.getElementById("info").style.visibility = 'hidden';
	
	var addinfo= document.getElementById("addinfo");
	addinfo.style.overflow = "hidden";
	var info = document.getElementById("info").style.visibility = 'visible';
	
	var request = new XMLHttpRequest();
	request.onreadystatechange = function() {
    if (request.readyState == 4 && request.status == 200) {
		
     document.getElementById("shippingreturn").innerHTML = request.responseText;
    }
  };
  request.open("post", "addinfo.php", true);
  request.send();

}


</script>



</body>

</html>

<style>
*{
		margin:0;
	box-sizing:border-box;
	padding:0;
	
}

.small{
	
	position:relative;
	right:90px;
}

.productdetails .column1 .productform{
display:flex;
flex-direction:column;
	
}
.rightcolumn{
	
	position:relative;
	left:100px;
}
.product{
	
	position:relative;
	top:70px;
	font-family:quicksand;
}
.productform .form{
	position:relative;
	top:30px;
}

.rightcolumn{
	display: flex;
  align-items: center;
  justify-content: center;
  gap: 2.5rem;
  max-width: 68.75rem;
  margin: auto;
  }
@media only screen and (max-width: 700px) {
	
	.recommendation1 .row{
display:flex;
	flex-direction:column;
	position:relative;
	right:620px;
	bottom:60px;
}
.details{
position:relative;
margin-left:-500px;

	
}

.details .box{
	
	max-width:380px;
	height:55%;
	position:relative;
	left:-90px
}

.details .detailslinks ul li{
	position:relative;
	margin-left:25px;
	left:120px;
}
.descriptionofitem{
	max-width:260px;
	
	
}
.rightcolumn{
		position:relative;
		
    margin-top: -4rem;
    flex-direction: column;

    gap: 0;
  }
.productinfo{
	position:relative;
	left:-100px;
	top:20px;
	
}

body{
width:100%;
height:100%;
margin:0;
padding:0;
overflow-x:hidden;
}




.buttonline{
	position:relative;
	left:550px;
	width:30%;
	
}
}

.buttons{
	display:flex;
	flex-direction:row;
	position:relative;
	left:310px;
	bottom:40px;

}

.buttons .wishlist{
	position:relative;
	bottom:18px;
	left:10px;

}

.buttons .wishlist .wishinglist{



width:100%;
}


  html, body {
	    scroll-behavior: smooth;
width:100%;
height:100%;

}

.productdetails{
position:relative;
	right:400px;
	
	
}

.productdetails img{
	position:relative;
	left:700px;
	top:10px;
	
}
quantity{
	
		position:relative;

	
	
}
.productname {
	

	font-family:Quicksand;
}

.price{
	
	position:relative;
	font-weight:bold;
	font-family:roboto;
	font-size:25px;
	color:#cc9966;
	top:10px;
}

.Quantity{
	color:#666666;
		font-family:'Poppins', sans-serif;
font-size:14px;

display:inline-block;
	z-index:10px;
}
.Size{
	font-size:14px;
position:relative;
bottom:30px;
	color:#666666;
		font-family:'Poppins', sans-serif;


	z-index:10px;
}


input[type=text],  input[type=number] {
    width: 70%;
  padding: 12px 20px;
  margin: 20px 0;
  box-sizing: border-box;
  border: 1px solid #666666;
  

  position:relative;

background-color:white;
}


#selectsize{
position:relative;
bottom:30px;
	    width: 70%;
  padding: 12px 20px;
left:4px;
  box-sizing: border-box;
  border: 1px solid #666666;


background-color:white;
}

.formbtn{
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #cc9966;

  background-color:white;
  cursor:pointer;
color:#cc9966;
position:relative;

width:150px;
text-transform:uppercase;
display:block;
	
}
.formbtn:hover{
	background-color:#cc9966;
	color:white;
	transition:all 0.5s;
	
	
}
.wishinglist{
	
	position:relative;

	width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #cc9966;

  background-color:white;
  cursor:pointer;
color:#cc9966;
width:150px;
text-transform:uppercase;


}

 .descriptionofitem{
	line-height:1.5;

	font-family:'Poppins', sans-serif;
	font-weight:bold;
	color:	#666666;
	font-size:14px;
word-wrap:break-word;
}

.row {
  display: inline-block;
   padding: 10px 30px ;
}

.column {
  flex: 40.33%;
 
}

html{
overflow-x:hidden;


}
.hr3{
border:1px solid #f4f0ec;
}
.recommendation1{

position:relative;
	top:200px;
	left:710px;
	


}

.recommendation1 img{

position:relative;
	right:20px;

}

.recommendation1 h2{
border-bottom: 1px solid black;
display: block;
	font-weight: normal;
	margin: 0;
	padding: 40px 0;
	font-size: 24px;
	text-align: center;
	width: 100%;
	position:relative;
	right:700px;


}
html{
overflow-x:hidden;


}



@media only screen and (max-width: 700px) {
	
	input[type=text],  input[type=number] {
    width: 80%;

}


#selectsize{

	    width: 80%;

}

.productdetails{
	position:relative;
	left:-630px;
	display:flex;
	flex-direction:column;
	
}


.productdetails .productimages{
	
display:block;
}



.column1{
visibility:hidden;
}

}


}

.column1{
visibility:hidden;
}




.column1{
display:block;
}



















@media only screen and (max-width: 1366px){
	.products-page{
		
	position:relative;
	right:300px;
		
		
	}

.row {
  display: inline-block;
   padding: 10px 30px ;
   position:relative;
   right:270px;
}
}

.details{
position:relative;
left:600px;
top:100px;

	
}
.detailslinks{
position:relative;
right:210px;
font-family:quicksand;
cursor:pointer;
}


.detailslinks li{
display:inline-block;
margin-left:100px;
transition:all 1s;

	
}
.detailslinks li:after {
  display:block;
  content: '';
  border-bottom: solid 3px #cc9966;;  
  transform: scaleX(0);  
  transition: transform 250ms ease-in-out;
 

}
.detailslinks li:hover:after { 

transform: scaleX(1); }

.detailslinks li a:hover{
 color:#cc9966;
}
.box{
	font-family:quicksand;
	width:800px;
	border:1px solid #dcdcdc;
	height:300px;
	position:relative;
	right:300px;
	top:50px;
	
}
</style>