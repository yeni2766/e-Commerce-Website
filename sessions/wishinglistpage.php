<?=theheader1('Cart')?>




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






}
?>
<div class="mycart">
    <h1 class ="h1">Wishlist</h1>
    <form action="index.php?page=wishinglist" method="post">
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
                    <td colspan="5" style="text-align:center;">Add an item here in case you want to buy later</td>
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
 <div class="buttons">

   
        </div>
<?=template_footer()?>

<style>
<style>


table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}

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
position:relative;
bottom:100px;
  height: 823px;
  left:50px;
width:800px;
  background: #FFFFFF;
  box-shadow: 1px 2px 4px 2px rgba(0,0,0,0.10);
  border-radius: 7px;
 	padding: 50px 50px 0;
  flex-direction: column;
   font-family: 'Roboto', sans-serif;
   color:#000000;
}

 .mycart  tr:first-child {
	padding: 20px 0;
	border-bottom: 1px solid #EEEEEE;
}

 .mycart  tr {
	position:relative;
	bottom:350px;
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



@media only screen and (max-width: 1366px){



h1{
	
		position:relative;
		left:580px;
		top:-20px;

	
	
}


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
	left:640px;
	bottom:80px;
	
}
</style>
