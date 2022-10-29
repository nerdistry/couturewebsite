<?php
require("..\Couture Connect\connection.php");

ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="history.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>History</title>
</head>

<body>

    <main>
        <table id='cart-table'>
            <thead>
                <h2>Your Purchase History</h2>
                <th style="text-align:center;">Date of purchase</th>
                <th>Image</th>
                <th>product Name</th>
                <th>Product Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </thead>
            <tbody>
                <?php
                 $user_id = $_SESSION['userId'];
                $sql = "SELECT * FROM tbl_order WHERE userId=$user_id AND order_status!=1";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $order_id = $row['order_id'];
                    $date_ordered = $row['created_at'];
                    $date_ordered = date_create($date_ordered);
                    $date_ordered = date_format($date_ordered,"d-M-Y");
                    $sql1 = "SELECT * FROM tbl_orderdetails INNER JOIN adminformproduct ON tbl_orderdetails.productId=adminformproduct.productId WHERE order_id=$order_id";
                    $query = mysqli_query($conn, $sql1);
                    $total = 0;
                    while ($row2 = mysqli_fetch_assoc($query)) {
                        $cart_image = $row2['image'];
                        $cart_name = $row2['productName'];
                        $cart_description = $row2['description'];
                        $cart_price = $row2['price'];
                        $quantity = $row2['order_quantity'];
                        $sub_total = $quantity * $cart_price;
                        $total = $total + $sub_total;
                        $product_id = $row2['orderdetails_id'];
                        echo "
                        <tr>
                        <td id='cart-number' class='caption'>$date_ordered</td>
                        <td>
                        <img src=\"../GetUploadedImages/".$cart_image."\"width=\"100\" height=\"100\">
                        </td>
                        <td class='cart-name'>$cart_name</td>
                        <td class='cart-name'>$cart_description</td>
                        <td class='cart-price'>$cart_price</td>
                        <td class='cart-quantity'>$quantity<small></small></td>
                        
                        <td>$sub_total</td>
                      
                        
                        
                
    
                    </tr>
                        
                        ";
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>