﻿<?=template_header4('Admin')?>

<link rel ="stylesheet" href="jacket1.css">
<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js"></script>




<div class = "small-container ">
<div class = "row2">

<div class = "col-2">
<div class = 'border'>
<form class = "form1" action = "admincode.php" method = "POST" style = "bottom:-150px;">
Admin Username :  <input type = "text" name = "username" placeholder = "Name/email" ><br><br>
Password : <input type = "password" name = "password" > <br><br><br>


<input type = "hidden" value = "true" name = "submitted" >



<button type = "submit" class = "submit" > Login </button>


</div>
</div>

</form> 











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
text-decoration:none;
font-family:quicksand;



position:absolute;
left:500px;
top:200px;
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
 text-transform:uppercase;
 letter-spacing:0.5;

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

p{

position:relative;
left:700px;
top:100px;


}
.para{
position:relative;
left:400px;
top:-10px;


}
.para1{
position:relative;
left:400px;
top:-3px;


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

-webkit-box-shadow:2px 2px 2px 2px;
border-right:
padding:30px;
input: inline-block;
font-family:quicksand;
position:relative;

font-size: 0.80rem;
left:520px;
top:50px;
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

@media only screen and (max-width: 1366px){



.h1{
	
		position:relative;
		left:230px;
		top:-20px;

	
	
}
.hello{
	
		position:relative;
		right:250px;
	
	
}

}
	



</style>