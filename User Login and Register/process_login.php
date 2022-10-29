<?php

require("../Couture Connect/connection.php");

#Checking for the exact error:
ini_set("display_errors", "1");
error_reporting(E_ALL);

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = $_POST["username"];
$password = ($_POST["password"]);


#For inserting into the database:
$sql = "SELECT * FROM  users where username = '".$username."' AND password = '".$password."'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
 
if($row["usertype"] == "user")
{
  $_SESSION["username"]=$username;
  $_SESSION["userId"]=$row["userId"];


  header("location: ..\Home Page\index.php");
  
}

elseif($row["usertype"] == "admin")
{
  $_SESSION["username"]=$username;
  $_SESSION["userId"]=$row["userId"];


  header("location: ..\Admin Dashboard\admininteractive.php");
  
}

else
{
echo "username or password is incorrect.";
}

// if (mysqli_query($conn, $sql)) {
//   echo " New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
}

