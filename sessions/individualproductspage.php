


<?php

//this will get the id that is linked to the product you clicked on earlier and will display the details
if (isset($_GET['id'])) {
	$id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id = '".$id."'";
	$result = mysqli_query($conn, $sql);
	$productitem = $result-> fetch_all(MYSQLI_ASSOC);
    // Fetch the product from the database and return the result as an Array
    
}
$sql = 'SELECT * FROM products ORDER BY RAND() LIMIT 2';
$result = mysqli_query($conn, $sql);
$recommendation = $result-> fetch_all(MYSQLI_ASSOC);







?>
<?=theheader1('Product')?>
<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<div class="productdetails">
	<?php foreach ($productitem as $product): ?>
    <img src="<?=$product['img']?>" width="300" height="450" alt="<?=$product['name']?>">
    <div >
        <h1 class="productname"><?=$product['name']?></h1>
        <span class="price">
            &pound;<?=$product['price']?>
         
        </span>
        <form action="index.php?page=shoppingcartpage" method="post" class = "form2">
            <input type="number" name="quantityofitem" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="productid" value="<?=$product['id']?>"><br>
			<input type="hidden" name="product" value="<?=$product['name']?>"><br>
			
												  <input type="hidden" name="product_price" value="&pound;<?=$product['price']?> "><br>
			<br>
            <input type="submit" class = "formbtn" value="Add To Cart">
        </form>
		  <form action="index.php?page=wishinglist" method="post">
           <input type="hidden" name="quantityofitem" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="productid" value="<?=$product['id']?>">
			<br>
            <input type="submit" value="Add To Wishing List">
        </form>

        <div class="descriptionofitem">
            <?=$product['desc']?>
        </div>
    </div>
	     <?php endforeach; ?>
</div>
<div class="recommendation1">
    <h2 style=" margin-left:-10px; margin-bottom:30px;" >You might be interested in these products</h2>
  
        <?php foreach ($recommendation as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
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
<style>

.productdetails{
position:relative;
	right:300px;
	
	
}

.productdetails img{
	position:relative;
	left:700px;
	top:10px;
	
}
quantity{
	
		position:relative;
	left:1100px;
	bottom:450px;
	
	
}
.productname {
	
	position:relative;
	left:1080px;
	bottom:450px;
	font-family:Quicksand;
}

.price{
	
	position:relative;
	left:1080px;
	bottom:210px;

	font-family:roboto;
	font-size:25px;
	color:grey;
}

input[type=text],  input[type=number] {
    width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid black;
  position:relative;
  left:1080px;
bottom:320px;
background-color:grey;
}
.form2 input[type=submit]{

width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;

  background-color:lightgreen;
  cursor:pointer;
color:white;
position:relative;
left:1190px;
bottom:330px;
width:150px;
border-radius:10px;

}

input[type=submit]{

width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
background-color:lightgreen;
 
  cursor:pointer;
color:white;
position:relative;
left:1360px;
bottom:403px;
width:150px;
border-radius:10px;



}

.formbtn{
	 position:relative;
left:0;
	
	
	
}

 .descriptionofitem{
	
	position:relative;
	left: 1080px;
	bottom:650px;
	font-family:'Roboto', sans-serif;

	color:	black;
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

.recommendation1{

position:relative;
	top:150px;
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

</style>