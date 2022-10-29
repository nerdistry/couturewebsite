<?php


// ini_set("display_errors", "1");
// error_reporting(E_ALL);

require("connection.php");


$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Role = $_POST["Role"];

$sql = "INSERT INTO AdminLogin (Username, Password, Role)
  VALUES ('$Username', '$Password', '$Role')";

if (mysqli_query($conn, $sql)) {
  echo " New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



// mysqli_close($conn);
