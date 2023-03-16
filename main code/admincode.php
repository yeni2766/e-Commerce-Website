<?php

 
// Include database file to connect the database details to the website

require_once 'databaseadminsql.php';

session_start();
    if(isset($_POST['Login']))
    {
		//if the user has not entered the username or the password, then they will get an error message
       if(empty($_POST['username']) && empty($_POST['password']))
       {
            $errormessage = "Please enter your password or username before proceeding.";
			echo $errormessage;
       }
       else
       { //it will create a statement that will select the user that matches the details the user has entered from the database
            $query="select * from users where adminname='".$_POST['username']."' and adminpassword='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {//if it is correct it will create a session
                $_SESSION['adminusername']=$_POST['username'];
                header("location:index.php");
            }
            else
            {//if this is wrong, it will send an error message
                 $errorusermessage = "Please enter your password or username correctly.";
			echo $errorusermessage;
            }
       }
    }
    else
    { //if the user tries to enter the page without logging in, it will send them to the login page
          header("location:index.php?page=adminaccountpage");
    }

?>

 
