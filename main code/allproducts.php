<?php


//this is the sql that i will use that will order the products by how many there is
$sql = 'SELECT * FROM products';
$result = $conn->query($sql);


// Fetch the products from the database
$products = $result -> fetch_all(MYSQLI_ASSOC);
// Get the total number of products

?>

<?=theheader('Products')?>
<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<!--- always use this viewport-->
 
<div class="products">
    <h1>All Products</h1>
    
    <div class="productss">
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=individualproductspage&id=<?=$product['id']?>" class="product">
		<div class  = "row3" >
			<div class = "column1">
            <img src="<?=$product['img']?>" width="200" height="300" alt="<?=$product['name']?>">
			</div>
			
            <span class="name"><?=$product['name']?></span><br><br>
            <span class="priceamount">
                &pound;<?=$product['price']?>
            
            </span>
        </a>
		
		</div>
		
        <?php endforeach; ?>
    

</div>

</div>
















<?=template_footer()?>


<style>

*{
	margin:0;
	padding:0;
	box-sizing:border-box;
	
	
}


  html, body {
	    scroll-behavior: smooth;
width:100%;
height:100%;

}
@media only screen and (max-width: 700px) {
.products h1{
	position:relative;
	margin-left:-450px;
	bottom:60px;
}

.products .productss{
	
	position:relative;
	bottom:200px;
	right:20px;
}
body{
width:100%;
height:100%;
margin:0;
padding:0;
overflow-x:hidden;
}


}
.row3{
	position:relative;
	margin-right:90px;
margin-top:50px;
 


}

.row3 {
  display: inline-block;
}
.productss{
	position:relative;
	bottom:130px;
	
	
}

.column1 img:hover{
	 -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, .5), 0 2px 3px rgba(0, 0, 0, .5);
   
    box-shadow: 0 2px 10px rgba(0, 0, 0, .5), 0 2px 3px rgba(0, 0, 0, .5);

	
}


.productss :hover {
transform:translateY(-5px);

}
.row3{
	
	position:relative;
	top:40px;
	left:550px;
	
	 transition: transform 0.5s ease;
}


.column1 img{
	border: 1px solid #DCDCDC	;
}


.row3{
	
	position:relative;
	top:150px;
	left:150px;
	font-family:quicksand;
	
	
}




  html, body {
    max-width: 100%;
    overflow-x: hidden;
}


.products h1{
	position:relative;
	left:590px;
	font-family:quicksand;
	
}




</style>
