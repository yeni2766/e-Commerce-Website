
<?php 



// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION['username']))   header("location: ../index.php?page=loginpage");
// Check if the user is logged in, if not then redirect him to login page



?>

<?=theheader('Buy Product')?>
<link rel = "stylesheet" href = "account.css" type="text/css">

<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<div class="placeorder content-wrapper">
    <h1>Delivery</h1>

</div>


<div class = "border">
<form class = "form1" action = "orderscode.php" method = "POST"  >
First Name :  <input type = "text" name = "FirstName"pattern="[A-Za-z]{1,32}" required ><br><br>
Last Name : <input type = "text" name = "LastName" pattern="[A-Za-z]{1,40}" required ><br><br>
Address: <input type = "text" name = "address" pattern="[A-Za-Z0-9.]{1,30}   " required ><br><br>


<input type = "hidden" value = "true" name = "submitted" >



<button type = "Submit" class = "submit">Buy Now </button>




</form>
</div>




<?=template_footer()?>

<style>
h1{
text-indent:250px;


}
.form1{
box-shadow:2px 2px 2px 2px;
border-right:
padding:30px;
input: inline-block;

font-family:quicksand;
position:relative;
left:550px;
top:150px;
}

.border {

position:relative;
right:500px;
width:500px;

}

.border .form1{
background: linear-gradient(#,  #0ABFBC );
padding:20px;

}
.navbar nav ul li{
position:relative;
right:100px;




}

.link-icons{

position:relative;
right:100px;

}
.link-icons2{

position:relative;
left:-50px;
bottom:20px;

}
html {
  overflow-x: initial !important;
}


  html, body {
    max-width: 100%;
    overflow-x: hidden;
}

h1{
text-decoration:none;
font-family:quicksand;



position:absolute;
left:380px;
top:200px;
}



input[type=text], input[type=password], input[type=number] {
    width: 100%;
  padding: 12px 21px;
  margin: 8px 0;
  box-sizing: border-box;
	border-radius:8px;
border:1px solid #c4c4c4;
  font-family: quicksand;
  font-size:0.875rem;
  margin-bottom:1.20rem;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.submit {
  background-color: red;
  color: white;
  padding: 16px 20px;
 margin-left: 150px;
 margin-top:50px;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
 font-family:quicksand;
 letter-spacing:0.5px;
  padding: 1rem;
  text-transform:uppercase;
}

.submit:hover {
  opacity: 1;
  background-color:grey;
}





.form1 {
  background-color: # fggfff ;
 
}
</style>