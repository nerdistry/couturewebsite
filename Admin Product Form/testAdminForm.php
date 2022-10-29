<?php


// ini_set("display_errors", "1");
// error_reporting(E_ALL);

require("..\Couture Connect\connection.php");
// print_r($_POST);

if (isset($_POST['AddProduct'])) {

$productName = $_POST["productName"];
$description = $_POST["description"];
$image = $_FILES["image"]['name']; // Getting image data from form
$size = $_POST["size"];
$price = $_POST["price"];
$discountPercentage = $_POST["discountPercentage"];
$sellingPrice = $_POST["sellingPrice"];
$item = $_POST["item"];
$category = $_POST["category"];
$subcategory = $_POST["subcategory"];
$dateAndTime = $_POST["dateAndTime"];

#Path to store the uploaded image
$target = "../Get Uploaded Images/".basename($_FILES['image']['name']);

  $sql = "INSERT INTO adminFormProduct (productName,description,image,size,price,discountPercentage, sellingPrice,item,category,subcategory,dateAndTime)
  VALUES ('$productName','$description','$image','$size','$price','$discountPercentage','$sellingPrice','$item','$category','$subcategory','$dateAndTime')";

if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
  echo"Image and ";
}else{
  echo"There was a problem uploading file";
}

  if (mysqli_query($conn,$sql)) {
    echo "record have been created and uploaded successfully! :)";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
