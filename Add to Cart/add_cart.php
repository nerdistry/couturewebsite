<?php
require("..\Couture Connect\connection.php");

if(!isset($_SESSION))
{
    session_start();
}

function addProduct($prodId,$orderID){
    global $conn;
    $sql_product = "INSERT INTO tbl_orderdetails(order_id,productId) values($orderID,'$prodId')";
    $result_prod = mysqli_query($conn,$sql_product);
    echo mysqli_error($conn);

    return $result_prod;
}

function addCart($id){
    global $conn;

    $user_id = $_SESSION["username"];
    $useriddb =$_SESSION["userId"];




    $sql_order = "SELECT * FROM tbl_order WHERE userId=$useriddb AND order_status=1";
    $result_order = mysqli_query($conn,$sql_order);
    echo mysqli_error($conn);

    if(mysqli_num_rows($result_order)>0){
        $data = mysqli_fetch_assoc($result_order);        
        addProduct($id,$data['order_id']);
        header("location:cart.php");

    } else {        
        $sql = "INSERT INTO tbl_order(userId,order_amount,order_status,created_at,updated_at,is_deleted) VALUES ($useriddb,1,1,now(),now(),0)";
        mysqli_query($conn,$sql);
        
        $order_id = mysqli_insert_id($conn);
        addProduct($id,$order_id);
        header("location:cart.php");
    }
}
if(isset($_GET['productId'])){
    $product_id = $_GET['productId'];
    addCart($product_id);
}
?>