<?php
require("..\Couture Connect\connection.php");

if (isset($_POST['quantity'])) {
    $details_id = $_POST['details_id'];
    $quantity = $_POST['quantity'];

    $sql2 = "UPDATE tbl_orderdetails SET order_quantity='$quantity'WHERE orderdetails_id=$details_id";
    mysqli_query($conn, $sql2);
    echo mysqli_error($conn);
    header("location:./cart.php");
}



if (isset($_POST['product_name'])){
    $cart_name = $_POST['product_name'];

    $sql2 = "UPDATE tbl_orderdetails SET product_name='$cart_name' WHERE orderdetails_id=$details_id";
    mysqli_query($conn, $sql2);
    echo mysqli_error($conn);
    header("location:./cart.php");

}

if (isset($_POST['orderdetails_total'])){
    $sub_total = $_POST['orderdetails_total'];

    $sql2 = "UPDATE tbl_orderdetails SET orderdetails_total='$sub_total' WHERE orderdetails_id=$details_id";
    mysqli_query($conn, $sql2);
    echo mysqli_error($conn);
    header("location:./cart.php");

}


if (isset($_POST['delete'])) {
    $details_id = $_POST['details_id'];
    mysqli_query($conn, "DELETE FROM tbl_orderdetails WHERE orderdetails_id=$details_id");
    header("location:./cart.php");
}

?>