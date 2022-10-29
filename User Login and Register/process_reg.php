<?php

require("../Couture Connect/connection.php");

#Checking for the exact error:
// ini_set("display_errors", "1");
// error_reporting(E_ALL);

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$usertype = $_POST["usertype"];



#For inserting into the database:
$sql = "INSERT INTO users (username,email,password,usertype)
  VALUES ('$username', '$email', '$password','$usertype')";

if (mysqli_query($conn, $sql)) {
  echo " New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

