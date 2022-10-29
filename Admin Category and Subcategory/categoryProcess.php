<?php
require("../Couture Connect/connection.php");


$categoryName = $_POST['categoryName'];

$sql = "INSERT INTO categories(categoryName) VALUES ('$categoryName')";
if(mysqli_query($conn,$sql)){
  echo "Record has been created successfully! :)";
}
else{
  echo"Error:" .$sql. "<br/>" .mysqli_error($conn);
}
?>
