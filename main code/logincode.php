<?php

require_once 'databasesql.php';
 
//the variable will represent what the user types in 
$username = $password = "";
//these one will be error messages for the user 
$errorusernamemessage = $errorpasswordmessage = "";
 
// this will collect all the data from the form
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   //it will check if the user has entered the username, if so it will store the username, and if not, it will bring the error message
    if(empty(trim($_POST["username"]))){
        $errorusernamemessage = "You have not entered a pin.";
echo $errorusernamemessage;
    } else{
        $username = trim($_POST["username"]);
    }
   
 //it will check if the user has entered the username, if so it will store the username, and if not, it will bring the error message
    if(empty(trim($_POST["password"]))){
        $errorpasswordmessage = "You have to enter a password to continue";
echo $errorpasswordmessage;
    } else{
        $password = trim($_POST["password"]);
    }
   //if the error messages variables are not set  then it will make the statement
    if(empty($errorusernamemessage) && empty($errorpasswordmessage)){

        $sql = "SELECT usersID, userName, userPWD FROM users WHERE userName = ?";
       
        if($result = mysqli_prepare($conn, $sql)){
            //this will bind the variables 
            mysqli_stmt_bind_param($result, "s", $bindedusername);
           
            // i will set the parameter to the variables
            $bindedusername = $username;
           
            //it will execute the statement
            if(mysqli_stmt_execute($result)){
               
                mysqli_stmt_store_result($result);
               
                // this is to verify whether it exists, if it doesnt there  will get a message and if it does it will bind the variables to create an account
                if(mysqli_stmt_num_rows($result) == 1){                    
                   
                    mysqli_stmt_bind_result($result, $id, $username, $password);
                    if(mysqli_stmt_fetch($result)){
                        $query = "SELECT * FROM users WHERE userName = '".$_POST['username']."' and userPWD ='".$_POST['password']."'";             
$result = mysqli_query ($conn, $query);
$row= mysqli_num_rows ($result);
                        if ($row>0) {

                            // a new session will start and the user will be taken to their account
                            session_start();
                           
                            // Store data in session variables
                            $_SESSION["loggedintoaccount"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                           
                            // takes user into this page
                            header("location: sessions/index.php");
                        } else{
                            // and if it is wrong an error message will be given
                            $errorpasswordmessage = "The password you entered was not valid.";
echo $errorpasswordmessage;
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $errorusernamemessage= "That username could not be found.Please try again";
echo $errorusernamemessage;
                }
            } else{
                echo "Something is wrong, please try again later.";
            }
      
        }
    }
    mysqli_close($conn);
}
?>
