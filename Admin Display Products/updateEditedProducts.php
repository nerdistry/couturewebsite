<?php
require("..\Couture Connect\connection.php");

$productID = $_POST["productId"];
$product_name = $_POST["productName"];
$product_desc = $_POST["description"];
$product_price = $_POST["price"];
$product_available = $_POST["item"];
$timeupdate = $_POST["dateAndTime"];
$size = $_POST["size"];



$update_data = "UPDATE adminFormProduct SET price='$product_price',description='$product_desc',item='$product_available',dateAndTime='$timeupdate' WHERE productId ='$productID'";

if (mysqli_query($conn, $update_data)) {
    echo "Record updated successfully" . "<br/>";
    header("location:..\Admin Display Products\displayProducts.php");
} else {

    echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
    // header("location:edit.php");
}
?>