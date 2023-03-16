
<link rel = "stylesheet" href = "account.css" type="text/css">

<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
	


<?=theheader('Cart')?>




<?php


// this will check if the variable has been used and that happens if the user clicks the buy button and the code will carry the data from the form

if (isset($_POST['productid'], $_POST['quantityofitem']) && is_numeric($_POST['productid']) && is_numeric($_POST['quantityofitem'])) {
   //is_numeric is used to make sure the data from the variables are numbers only
   
    $productid = (int)$_POST['productid'];
    $quantityofitem = (int)$_POST['quantityofitem'];
  //this is where we will make the statement 
  $sql = "SELECT * FROM products WHERE id ='".$productid."'";
  $result = mysqli_query($conn, $sql); 
  
  $allproducts = $result->fetch_all(MYSQLI_ASSOC);


// Send the user to the buy now page if they click the buynow button, 
if (isset($_POST['buyproduct']) && isset($_SESSION['shoppingcart']) && !empty($_SESSION['shoppingcart'])) {

   
    header('Location: index.php?page=buyproduct');

    exit;
}




}
?>
<div class="mycart">
    <form action="index.php?page=buyproduct" method="post">
        <table>
            <th>
                <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </th>
            <tbody>
                <?php if (empty($allproducts)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Select an item to go on the cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($allproducts as $product): ?>
                <tr>
				
                    <td class="productimage">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="<?=$product['img']?>" width="100" height="150" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td class = "name">
				
                        <a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['name']?> </a>
						 <input type="hidden" name="product" value="<?=$product['name']?>"><br>
                        <br>
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="removeitem">Remove item</a>
                    </td>
                
                    <td class="quantityofitem">
                        <input type="number" name="quantity-<?=$product['id']?>" value="<?= $quantityofitem ?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    </td>
					    <td class="price">&pound;<?=$product['price']?></td>
                    <td class="price">&pound;<?=$product['price'] *   $quantityofitem ?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
			
        </table>

		</form>
		</div>
<?=template_footer()?>

<style>



html {
  overflow-x: initial !important;
}


  html, body {
    max-width: 100%;
    overflow-x: hidden;
}

.h1{
position:relative;
left:330px;
bottom:110px;
font-family:arial;
font-size:20px;

}
form{
position:relative;
top:100px;

}





.mycart table {
	width: 80%;
	position:relative;

bottom:100px;
  height: 523px;
margin:auto;
width:800px;
  background: #FFFFFF;
  box-shadow: 1px 2px 4px 2px rgba(0,0,0,0.10);
  border-radius: 7px;
 	padding: 50px 50px 0;
  flex-direction: column;
   font-family: 'Roboto', sans-serif;
   color:#000000;
}


 .mycart  tr {
	position:relative;
	bottom:200px;
}

 .mycart .removeitem {
	color: #708090	;
	font-size: 12px;
	
}
.mycart .name .removeitem:hover {
	text-decoration: underline;
	color:black;
}
.mycart .price {
	color: #000000;
	font-size:18px;
	font-weight:bold;
	
}


.mycart .name {
	color: #000000;
	font-size:14px;
	font-weight:bold;
	
}

main .cart table a {
	text-decoration: none;
	color: #000000;
}





.buttons .btn{
	background-color:blue;
	width: 120px;
	height:50px;
	border-radius:20px;
	border:none;
	padding:3px 3px;
	color:white;
	font-size:13px;
	font-weight:bold;
	transition: background-color  3s ;
	
}
.btn:hover{
	background-color:green;
	color:black;
	box-shadow: 1px 2px 2px;
	
	
}
.buttons{
	position:relative;
	left:300px;
	top:480px;
	
}

@media only screen and (max-width:700px){
	.mycart table{
		
		width:100%;
	}
	
	.mycart table td{
		position:relative;
margin-left:60px;
	}
	.mycart table tbody{
		visibility:hidden;
	}
	
	
}
</style>

