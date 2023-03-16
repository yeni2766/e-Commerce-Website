
<?php 


include 'shoppingcartdatabase1.php';


?>
<?=template_header5('Admin Management')?>
<link rel ="stylesheet" href="jacket1.css">
<link href= "https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">







<div class="sidenavigation">
 
 <a href="index.php?page=adminaccountpage">  <i class= "fa fa-home"  aria-hidden="true">  </i>  Home</a>

 </div>
 

<h1 >Accounts</h1>




<table  border='1' class ="table">
<tr>
<th> User ID </th>
<th> Username </th>
<th> Email</th>
<th>Password</th>
<th> First Name</th>
<th> Last Name </th>
<th> Delete Account </th>

</tr>

<?php
include ("databasesql.php");

$sqlstatement = "Select * FROM users";
$data = mysqli_query($conn, $sqlstatement);
$count = mysqli_num_rows ($data);

if ($count!=0)
{
while ($result = mysqli_fetch_assoc($data))
{
echo "
<tr>
<td>" .$result ['usersID']."</td>
<td>" .$result ['userName']."</td>
<td>" .$result ['userEmail']."</td>
<td>" .$result ['userPWD']."</td>
<td>" .$result ['Firstname']."</td>
<td>" .$result ['Lastname']."</td>
<td><a href = 'deleteaccount.php?rn=$result[usersID] '> Delete </td>

</tr>
";
}
}
else {
echo "no records found";
}
?>






</table>





















 

<div class = "small-container ">
<div class = "row2">

<div class = "col-2">
<h1 class = "h1" > </h1>

<div class  ="border">
<form class = "form1" action = "signupcode.php" method = "POST"  >
First Name :  <input type = "text" name = "FirstName"pattern="[A-Za-z]{1,32}" required ><br><br>
Last Name : <input type = "text" name = "LastName" pattern="[A-Za-z]{1,40}" required ><br><br>
Email: <input type = "text" name = "email" pattern="[A-Za-Z@0-9.]{1,30}   " required ><br><br>
Username:<input type = "text" name = "username" pattern="[A-Za-Z@0-9.]{1,15}  " required  ><br><br>
Password : <input type = "password" name = "password" required > <br><br>
Password : <input type = "password" name = "passwordrepeat" placeholder = "repeat password" required ><br><br>

<input type = "hidden" value = "true" name = "submitted" >





<button type = "Submit" class = "submit">Add Account</button>

</form>

</div>

<?=template_footer()?>





<style>

h1{

margin-right:300px;

}

p{

position:relative; left: 560px; top : 80px;

font-family: sans-serif;

color : #000
}



.form1{
position:relative;

left:500px; bottom: -150px; "

}
</style>
<style>

input[type = text]{
width : 30%;
padding : 3px;
border-radius: 12px  #555;

}

</style>

<style>

input[type = number] {

padding : 3px;
border-radius: 12px;
}

</style>

<style>

input[type = submit] {

padding : 3px;
border-radius: 12px;
position:relative;
left:230px;
top:20px;
}

</style>

<style>

.form1{
font-family:'Quicksand', sans-serif;
font-weight :bold;
}
</style>










<style>
#demo{

position:relative; bottom:600px;
}
</style>







<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>



<style>
.header{
 background: linear-gradient(#ECE9E6,#FFFFFF );
}
</style>
<style>
#footer{
margin-top: 700px;
}
</style>


</style>
<style>
<style>
.header .row{
margin-top:90px ;
}
</style>
<style>
.div-2 .row{
margin-top: -100px ;
}
</style>

<style>
.div-2 .row{
height: 50px ;
}
</style>





<style>
.div-2{
  background: linear-gradient(#232526,#414345 );
}
</style>
<style>
#nav1{
font-size:14px;


}
</style>
<style>
h3{
font-family:'Quicksand', sans-serif;
}
</style>


<style>
#p{

font-family: 'Quicksand', sans-serif;
}
</style>


<style>
#p{

font-family: 'Quicksand', sans-serif;
}
</style>
<style>
h1{
font-family: 'Quicksand', sans-serif;



}
</style>

<style>

<style>
#p1{
font-family: 'Hind Siliguri';




}
</style>

<style>
#p1{
color: black;




}
</style>

<style>
#p{

color:black;
}
</style>

<style>
html {
  overflow-x: initial !important;
}
</style>
<style>

  html, body {
    max-width: 100%;
    overflow-x: hidden;
}


</style>
<style>
@media only screen  and (min-width : 1224px) {
.header
{
width:1500px;
position:relative; left: -100px;
}
}


@media only screen  and (min-width : 1224px) {
.row1{

position:relative;right:200px;
}


}
@media only screen  and (min-width : 1224px) {
.btn{

position:relative;right:1000px;
}


}




<style>

overflow-anchor: none;


</style>


<style>
@media only screen and (max-width: 600px){

nav ul{
position:absolute;
top:170px;
left:0;
background:#333;
width: 100%;
overflow: hidden;
transition:max-height 0.5s;
}
nav ul li{
display:block;
margin-right: 50px;
margin-top:10px;
margin-bottom:10px;
}

nav ul li a{
color: #fff;



}

.navbar .logo {
position:relative;

right: 170px;



}

.menu-icon{
display:block;
cursor:pointer;

}

.shopping-cart{

position:relative;

right: 160px;

}


}

</style>
<style>


input[type=text], input[type=password], input[type=number] {
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid black;
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
  background-color: green;
  color: white;
  padding: 16px 20px;
 margin-left: 150px;
 margin-top:50px;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;

}

.submit:hover {
  opacity: 1;
}




/* Set a grey background color and center the text of the "sign in" section */
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
border-style :solid;
border-color: black;
border-right:
padding:30px;
input: inline-block;

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

