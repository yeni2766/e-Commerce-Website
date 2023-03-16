
<?=template_header3("Admin Page")?>
<link rel ="stylesheet" href="jacket1.css">
<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">




<div class="sidenavigation">

  <a href="index.php?page=adminmanagement"> <i class="fa fa-user" aria-hidden="true"></i>   Account Management</a>
    <a href="index.php?page=ordersofproducts"> <i class="fa fa-user" aria-hidden="true"></i>   Orders</a>
  <a href="index.php?page=adminlogout"><i class="fa fa-sign-out" aria-hidden="true"></i>          Logout</a>
</div>

<img src = "images/admin.png" style = "position:relative; left:640px;bottom:100px;">
<h1 style =" position:relative; left:390px; top:-100px;">This is the Admin Panel, Please proceed with caution</h1>


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
