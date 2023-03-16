<?php




require_once 'logincode.php';
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION['username']))   header("location: ../index.php?page=login");



?>


<?=template_header3('Account Management')?>

<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href = "https://use.fontawesome.com/c38ca81492.js"   rel = "stylesheet">
<script src="https://use.fontawesome.com/c38ca81492.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js"></script>



<div class="sidenavigation">

    <a href="index.php?page=youraccount"><i class="fas fa-home " aria-hidden="true"></i>          Home</a>

</div>

<h1 class = 'h1' >Account</h1>


<p class="para ">Do you want to change your password :   <a href  = "index.php?page=passwordresetpage" class = "pwd" >Change Password</a> </p>
<p class="para1 ">Do you want to delete your Account :   <a href  = "index.php?page=deleteaccount" class = "pwd" >Delete your account</a> </p>




<div class = "status" ></div>



  </div>



</div>













<?=template_footer()?>
<style>

.h1{
position:relative;
top:-30px;
margin-right:400px;
text-decoration:underline;


}
.para{
position:relative;
left:500px;
top:-10px;
font-family:quicksand;


}
.para1{
position:relative;
left:500px;
top:-3px;
font-family:quicksand;

}


.pwd:hover{

color:blue;
text-decoration:underline;

}

</style>

<style>

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