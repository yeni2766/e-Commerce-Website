<?php
// we start by creating a session 
session_start();
 
//this will check if the user is logged in, otherwise the user cannot use this url directly
if (!isset($_SESSION['username']))   header("location: index.php?page=adminmanagement");

$usersID = $_GET ['rn'];
// Include database file to connect to the users database to change the passwords
require_once "databasesql.php";
//set the variables and error messages in case it is not entered, or incorrectly
$newpassword = $confirmnewpassword = "";
$newpassworderrormessage = $confirmnewpassworderrormessage = "";
 
//when the user tries to change password from the form, it will process the data into the code below
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // validating the new passowrd
    if(empty(trim($_POST["newpassword"]))){
		//this will be the error message if the user presses enter before changing the password
        $newpassworderrormessage = "Please enter the new password to change your password before you can proceed";
echo $newpassworderrormessage;
//if the password is not 7 characters at least it will send an error message
    } elseif(strlen(trim($_POST["confirmnewpassword"])) < 7){
        $newpassworderrormessage = "When creating a password, you must have at least 7 characters to continue ";
echo $newpassworderrormessage;
    } else{
        $newpassword = trim($_POST["newpassword"]);
    }
    // this is for confirming the password
    if(empty(trim($_POST["confirmpassword"]))){
        $confirmnewpassworderrormessage = "Please confirm the password before you proceed";
echo $confirmnewpassworderrormessage;
    } else{
        $confirmnewpassword = trim($_POST["confirmnewpassword"]);
		//this will check if the passwords matches if it does it will create the statement
        if(empty($newpassworderrormessage) && ($newpassword != $confirmnewpassword)){
            $confirmnewpassword = "Password did not match. Please try again";
echo $confirmnewpassworderrormessage;
        }
    }
       
    if(empty($newpassworderrormessage) && empty($confirmnewpassworderrormessage)){
        // creates a statement that updates the users account with the new password
        $sql = "UPDATE users SET userPWD = ? WHERE usersID = '$usersID '";
       
        if($result = mysqli_prepare($conn, $sql)){
            // Bind variables as parameters
            mysqli_stmt_bind_param($result, "ss", $binded_newpassword, $binded_username);
           
            // Set parameters
            $binded_password = ($newpassword);
            $binded_username = $_SESSION["username"];
           
            // it executes the statement
            if(mysqli_stmt_execute($result)){
                // Password updated 
                session_destroy();
				//this will send the user to the login page
                header("location: index.php?page=loginpage");
                exit();
            } else{
                echo "Something went wrong with the connection. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($conn);
}
?>