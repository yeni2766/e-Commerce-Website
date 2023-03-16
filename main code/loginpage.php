

<?php

require_once "shoppingcartdatabase.php";

?>
<?=theheader('Login')?>

<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<div class = "small-container ">
<div class = "row2">

<div class = "col-2">


<div class = 'border'>
<form class = "form1" action = "logincode.php" method = "POST" style = "bottom:-150px;">
Username :  <input type = "text" name = "username" placeholder = "Name/email" ><br><br>
Password : <input type = "password" name = "password" > <br><br><br>

<input type = "hidden" value = "true" name = "submitted" >



<button type = "submit" class = "submit" > Login </button>
<div class = 'links'> 
 <p class ="size">Dont have an account? <a href="index.php?page=Account" class = "link">Create one here</a>.</p>

 </div>
</div>

</form>

<div class = "status" ></div>



  </div>



</div>

<?=template_footer()?>


<style>
html {
  overflow-x: initial !important;
}
@media only screen and (max-width:700px){
	.form1{
		width:75%;
		height:70%;
		position:relative;
	margin-left:-26px;
	}
	
	.form1 .submit{
		position:relative;
	margin-left:80px;
		
	}
.form1 .links{
	position:relative;
right:60px;
	
}
	
	
	
	
	
	
	
	
}
.span1{
	position:relative;
	bottom:16px;
	left:50px;
	
}
  html, body {
    max-width: 100%;
    overflow-x: hidden;
}

.h1{
text-decoration:none;
font-family:quicksand;



position:absolute;
left:500px;
top:200px;
}

.navbar nav ul li{
position:relative;
right:100px;




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


input[type=text], input[type=password], input[type=number] {
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
border-radius:8px;
border:1px solid #c4c4c4;
  font-family: quicksand;
   font-size:0.875rem;
  margin-bottom:1.20rem;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.submit {
  background-color: green;
  color: white;
  padding: 16px 20px;
 margin-left: 120px;
 margin-top:50px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
 font-family:quicksand;
  letter-spacing:0.5px;
   padding: 1rem;
  text-transform:uppercase;

}

.submit:hover {
  opacity: 1;
}


.form1 {
  background-color: # fggfff ;
 
}
</style>
 <style>
 .form1{

 
}

 </style>

</style>
<style>

.size{

position:relative;
left:100px;

}




</style>
<style>

.size{

position:relative;

top:220px;
}



</style>
<style>


.link{

text-decoration:underline;
color:blue;

}
</style>
<style>
.sidenav {
height:300px;
  width: 190px;
  position: fixed;
  z-index: 1;
  top: 180px;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  font-family:  sans-serif;
  color: White;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.fa fa-sign-out{

color:black;
}

</style>
<style>


.body{

background:linear-gradient(#42275a,  #734b6d    );

}




</style>
<style>

h1{
position:relative;
top:-30px;
left:400px;
text-decoration:underline;


}

.s{

position:relative;
margin-left:30px;
top:100px;


}
.para{
position:relative;
left:400px;
top:-10px;


}
.para1{
position:relative;
left:500px;
top:300px;


}


.pwd{

color:blue;
text-decoration:underline;

}

</style>

<style>

.btn {
margin-left:100px;



}

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
left:850px;
top:40px;
height:100%;
font-size: 0.80rem;

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
.container .table{

   border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
position:relative;


}
.table {

left:330px;

    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
</style>





















<style>
.a .pp{
color:blue;


}


</style>
<style>

.size{

position:relative;
left:100px;

}




</style>
<style>

.size{

position:relative;

top:50px;
}



</style>
<style>










p{
position:relative;
left:800px;

}




.link{

text-decoration:underline;
color:blue;

}
@media only screen and (max-width: 1366px){
	.row2{
		position:relative;
		left:100px;
		
		
		
		
	}

.h1{
	
		position:relative;
		left:210px;
top:-10px;
	
	
}


}
	

</style>
