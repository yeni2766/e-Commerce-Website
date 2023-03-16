



<?php


require_once 'logincode.php';

if (!isset($_SESSION['username']))   header("location: ../index.php?page=loginpage");
// Check if the user is logged in, if not then redirect him to login page



?>









<?=template_header3('logout')?>
<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<div class="sidenavigation">

    <a href="index.php?page=youraccountpage"><i class="fas fa-home " aria-hidden="true"></i>          Home</a>


</div>


<p>Are you sure you want to log out?</p>  <a href = "logoutcode.php"> <i class="fa fa-sign-out" aria-hidden="true"></i>      <button type = "Submit" class = "submit">Logout </button></a>









  </div>



</div>


<?=template_footer()?>


<style>
p{
position:relative;
left:600px;
top:100px;

}
.submit{
position:relative;
left:830px;
top:70px;


}
.submit {
  background-color: red;
  color: white;
  padding: 16px 20px;

  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;

}

.submit:hover {
  opacity: 1;
}

html{

overflow-x:hidden;

}
.sidenavigation {
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

.sidenavigation a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  font-family:  sans-serif;
  color: White;
  display: block;
}

.sidenavigation a:hover {
  color: #f1f1f1;
}

h1{

position:relative;
left:700px;
font-family:quicksand;

}


</style>

<style>




.footer {
    
  bottom:0;
 
    width: 100%;
position:relative;
top:500px;
   
   
}

.footer-col-4{
	position:relative;
	left:300px;
	bottom:18px;
	font-family:quicksand;
}
	
.footer-col-3{
	position:relative;
	top:110px;
	padding:24px;
	font-family:quicksand;
}
		
	.footer-col-2{
	position:relative;
	top:120px;
	font-family:quicksand;
	
}

.footer-col-1{
	position:relative;
	top:150px;
	padding:20px;
	font-family:quicksand;
		
	
}

.socialmedia{
	height:50px;
	background-color:black;
	position:relative;
	top:670px;
}
	.fa fa-twitter {
  background: #55ACEE;
  color: green;
position:relative;
left:300px;
}
	

.span1{
	position:relative;
	bottom:16px;
	left:50px;
	
}

</style>
	
