

<?=theheader('Account')?>

<link rel = "stylesheet" href = "account.css" type="text/css">

<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<div class = "small-container ">
<div class = "row2">

<div class = "col-2">


<div class = "border">
<form class = "form1" action = "signupcode.php" method = "POST"  >
First Name :  <input type = "text" name = "FirstName"pattern="[A-Za-z]{1,32}" required ><br><br>
Last Name : <input type = "text" name = "LastName" pattern="[A-Za-z]{1,40}" required ><br><br>
Email: <input type = "text" name = "email" pattern="[A-Za-Z@0-9.]{1,30}   " required ><br><br>
Username:<input type = "text" name = "username" pattern="[A-Za-Z@0-9.]{1,15}  " required  ><br><br>
Password : <input type = "password" name = "password" required > <br><br>
Password : <input type = "password" name = "passwordrepeat" placeholder = "repeat password" required ><br><br>

<input type = "hidden" value = "true" name = "submitted" >
<div class = 'links'> 
<p class ="size">Already have an account? <a href="index.php?page=loginpage" class = "link">Login here</a>.</p>
</div>


<button type = "Submit" class = "submit">Sign Up </button>



</form>
</div>
</div>




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
@media only screen and (max-width:700px){
	.border	.form1{
		width:75%;
	
		position:relative;
	margin-left:-26px;
	margin-top:-55px;
	}
	.border .form1 .submit{
			position:relative;
	margin-left:130px;
		
	}
	
	.form1 .links{
	position:relative;
right:40px;
	
}
	
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
  padding: 12px 21px;
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
  margin-bottom: 26px;
}


.submit {
  background-color: red;
  display:block;
  color: white;
  padding: 1rem;
  text-transform:uppercase;
  margin-left: 150px;
 margin-top:50px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
 font-family:quicksand;
 letter-spacing:0.5px;
 position:relative;
 right:40px;

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
	position:relative;

box-shadow:2px 2px 2px 2px;
border-right:
padding:30px;
input: inline-block;
font-family:quicksand;
position:relative;
left:450px;
top:150px;
font-size: 0.80rem;
}

.border {

position:relative;
right:500px;
width:500px;
bottom:100px;
}

.border .form1{
background: linear-gradient(#,  #0ABFBC );
padding:20px;

}

@media only screen and (max-width: 1366px){
	.row2{
		position:relative;
		left:100px;
		
		
		
		
	}

.h1{
	
		position:relative;
		left:220px;
top:-10px;
	
	
}


}
	





</style>