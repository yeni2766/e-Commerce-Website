
<?php

require_once 'logincode.php';
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION['username']))   header("location: ../index.php?page=login");




?>

<?=template_header2('Your Account')?>
<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href = "https://use.fontawesome.com/c38ca81492.js"   rel = "stylesheet">
<script src="https://use.fontawesome.com/c38ca81492.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js"></script>

<div class="sidenavigation">

  <a href="index.php?page=orders">  <i class="fa fa-shopping-cart" aria-hidden="true"></i> Purchase History</a>
  <a href="index.php?page=accountmanagement"> <i class="fa fa-user" aria-hidden="true"></i>   Account Management</a>
  <a href="index.php?page=logout"><i class=" fas fa-sign-out-alt  "  aria-hidden="true"></i>  </i>          Logout</a>
</div>

<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>



</form>
</div>



</div>

<?=template_footer()?>
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
left:500px;
font-family:quicksand;

}


</style>