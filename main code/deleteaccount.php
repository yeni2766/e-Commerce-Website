<?php
include ("databasesql.php");
error_reporting();
$usersID = $_GET ['rn'];
$query  = "DELETE FROM users WHERE usersID  = '$usersID '";
$data = mysqli_query ($conn, $query);

if ($data)
{
echo "<font color = 'red'>Record deleted";
}
else{

echo "<font color = 'red'>Record not deleted";
}
    ?>