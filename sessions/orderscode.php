<?php
session_start();
require_once 'shoppingcart.php';
require_once 'orderdatabase.php';

//these are the variables to provide the validation we need when the user enters their details


$address = $product = $firstname = $lastname = "";
$addresserrormessage  = $firstnameerrormessage = $lastnameerrormessage = "";
 
// this code is what will run when the user presses the buy now button
if($_SERVER["REQUEST_METHOD"] == "POST"){
 

   
if(empty(trim($_POST["address"]))){
        $addresserrormessage = "Please enter a address before we can proceed please.</br>";
echo $addresserrormessage;
    } else{
        // Prepare a select statement
        $sql = "SELECT orderID FROM orders WHERE address = ?";
       
        if($result = mysqli_prepare($conn, $sql)){
            // this will be the variables we will be using
            mysqli_stmt_bind_param($result, "s", $binded_address);
           
          //set the parameters to the variables made
            $binded_address = trim($_POST["address"]);
           
           //the statement is executed here
            if(mysqli_stmt_execute($result)){
                //then its stored
                mysqli_stmt_store_result($result);
               
           
                    $address = trim($_POST['address']);
                }
            } else{
                echo " Please try again later, something has gone wrong";
            }

            // the statement ends here
            mysqli_stmt_close($result);
        }
    

if(empty(trim($_POST["FirstName"]))){
        $firstnameerrormessage = "Please enter a First Name because we can proceed please<br>";
echo $firstnameerrormessage;
    } else{
        // Prepare a select statement
        $sql = "SELECT orderID FROM orders WHERE FirstName = ?";
       
        if($result = mysqli_prepare($conn, $sql)){
            // this will be the variables we will be using
            mysqli_stmt_bind_param($result, "s", $binded_firstname);
           
         //set the parameters to the variables made
            $binded_firstname = trim($_POST["FirstName"]);
           
           //the statement is executed here
            if(mysqli_stmt_execute($result)){
      //stores the result
                mysqli_stmt_store_result($result);
               
               
               
                 $firstname = trim($_POST['FirstName']);
               
            } else{
        echo " Please try again later, something has gone wrong";
            }

            // Close statement
            mysqli_stmt_close($result);
        }
    }


if(empty(trim($_POST["LastName"]))){
        $lastnameerrormessage = "Please enter a Last name because we can proceed please";
echo $lastnameerrormessage;
    } else{
        // Prepare a select statement
        $sql = "SELECT orderID FROM orders WHERE LastName = ?";
       
        if($result = mysqli_prepare($conn, $sql)){
  // this will be the variables we will be using
            mysqli_stmt_bind_param($result, "s", $binded_lastname);
           
            // Set parameters to the variables made
            $binded_lastname = trim($_POST["LastName"]);
           
       //the statement is executed here
            if(mysqli_stmt_execute($result)){
              //the result is stored here
                mysqli_stmt_store_result($result);
               
               
               
                 $lastname = trim($_POST['LastName']);
               
            } else{
   echo " Please try again later, something has gone wrong";
            }

            // Close statement
            mysqli_stmt_close($result);
        }
    }




	
	



	   












//if the validation works then it will insert the form into the database
    if(empty($addresserrormessage) && empty ($firstnameerrormessage) && empty ($lastnameerrormessage)) {
       
        // create a sql statement
        $sql = "INSERT INTO orders (address,username, Firstname, Lastname, product, price) VALUES (?, ?, ?, ?,?,?)";
         
        if($result = mysqli_prepare($conn, $sql)){
            // Bind variables as parameters
            mysqli_stmt_bind_param($result, "ssssss", $binded_address, $binded_username, $binded_firstname,$binded_lastname, $binded_product, $binded_price );
           
            // Set parameters to the sessions and variables that has been created

			$binded_price =  $_SESSION["price"];
            $binded_username =   $_SESSION["username"];
          $binded_product =  $_SESSION["product"];
  $binded_address = $address;
$binded_firstname = $firstname;
$binded_lastname = $lastname;
           
            // the statement will be executed here
            if(mysqli_stmt_execute($result)){
                // Redirect to login page
				unset( $_SESSION["product"]);
					unset( $_SESSION["price"]);
						unset( $_SESSION["cart"]);
                header("location: index.php");
            } else{
                echo "Please try again later. Connection error<br>";
            }

            // Close statement
            mysqli_stmt_close($result);
        }
    }
   
    // Close connection
    mysqli_close($conn);
}
?>