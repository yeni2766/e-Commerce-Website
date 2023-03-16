<?php




require_once 'logincode.php';
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION['username']))   header("location: ../index.php?page=login");
// Check if the user is logged in, if not then redirect him to login page



?>


<?=template_header3('Delete Account')?>

<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href = "https://use.fontawesome.com/c38ca81492.js"   rel = "stylesheet">
<script src="https://use.fontawesome.com/c38ca81492.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js"></script>

<div class="sidenav">
     <a href="index.php?page=youraccountpage"><i class="fas fa-home " aria-hidden="true"></i>          Home</a>
</div>


<p class='para'>Are you sure you want to Delete your account?</p>  <a href = "deletecode.php"> <i class="fa fa-sign-out" aria-hidden="true"></i>      <button type = "Submit" class = "submit">Delete my Account </button></a>





<div class = "status" ></div>



  </div>



</div>

<?=template_footer()?>

<style>

.h1{
position:relative;
top:-30px;
margin-right:200px;
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
left:800px;
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

h1{

position:relative;
left:700px;
font-family:quicksand;

}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.submit {
  background-color: red;
  color: white;
  padding: 16px 20px;
 margin-left: 580px;
 margin-top:50px;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
 font-family:quicksand;

}

.submit:hover {
  opacity: 1;
}

</style>