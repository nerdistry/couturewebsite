<?php
require("..\Couture Connect\connection.php");

$status = $_POST["order_status"];
$orderID = $_POST["order_id"];




$update_data = "UPDATE tbl_order SET order_status='$status' WHERE order_id ='$orderID'";

if (mysqli_query($conn, $update_data)) {
    echo "Record updated successfully" . "<br/>";
    header("location: vieworders.php");
} else {

    echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
    // header("location:edit.php");
}
?>