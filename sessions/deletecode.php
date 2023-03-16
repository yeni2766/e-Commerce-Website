<?php
// start the session
session_start();
 require_once 'logincode.php';
// Check if the user is logged in, if not then redirect him to login page so the user cannot go through there without thst
if (!isset($_SESSION['username']))   header("location: ../index.php?page=loginpage");
// Include database file to connect the website to the accounts details
require_once "databasesql.php";

 $sql = "DELETE FROM users WHERE userName = ?";
        
        if($result = mysqli_prepare($conn, $sql)){
              //this will bind the variables 
            mysqli_stmt_bind_param($result, "s", $binded_username);
            
            // Set the parameters
     
            $binded_username = $_SESSION["username"];
            
      //the statement will get executed here
            if(mysqli_stmt_execute($result)){
                //the account will delete here and it will end the session and send the user to the login page
				unset($_SESSION['username']);
                session_destroy();
				
                header("location: index.php?page=loginpage");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    
    
    // Close connection
    mysqli_close($conn);

?>