<?php

require("..\Couture Connect\connection.php");

ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);


$sql = $sql = "SELECT * FROM tbl_orderdetails INNER JOIN adminformproduct ON tbl_orderdetails.productId=adminformproduct.productId INNER JOIN tbl_order ON tbl_orderdetails.order_id=tbl_order.order_id WHERE order_status=1";
$result = mysqli_query($conn, $sql);


if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="cart.css">
</head>

<body>

    <table>

        <thead>
            <tr id="head">
                <th colspan="8">
                    <h2>CART</h2>
                </th>
            </tr>

            <tr class="headers">
                <th></th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
            $username = $_SESSION["username"];
            $counter = 0;

            $total = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $counter2 = $counter++;
                    $cart_name = $row['productName'];
                    $cart_description = $row['description'];
                    $cart_price = $row['price'];
                    $quantity = $row['order_quantity'];
                    $sub_total = $quantity * $cart_price;
                    $total = $total + $sub_total;
                    $details_id = $row['orderdetails_id'];
            ?>
                    <tr>
                        <td id='cart-number' class='caption'><?php echo $counter ?></td>


                        <td><img src="../GetUploadedImages/<?php echo $row['image'] ?>" alt="" height="100">
                        </td>
                        <td><?php echo $cart_name ?></td>
                        <td><?php echo $cart_description ?></td>
                        <td>Ksh. <?php echo $cart_price ?></td>
                        <td>
                            <div class="update-qty">
                                <form action="cartProcess.php" method="post">
                                    <input type='hidden' value='<?php echo $details_id ?>' name='details_id'>
                                    <input type='text' name='quantity' class='' value='<?php echo $quantity ?>'>
                                    <input type='hidden' value='<?php echo $cart_name ?>' name='product_name'>
                                    <input type='hidden' value='<?php echo $sub_total ?>' name='orderdetails_total'>
                                    <button type='submit'>Update</button>
                                </form>
                            </div>
                        </td>
                        <td>Ksh. <?php echo $sub_total ?></td>
                        <td>
                            <div class="update-qty">
                                <form action='cartProcess.php' method='post'>
                                    <input type='hidden' value='<?php echo $details_id ?>' name='details_id'>
                                    <button type='submit' name='delete' class='warning-btn'>Remove</button>
                                </form>
                            </div>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <?php
    echo "<p class='cart-total'>Total: <span>$total<small>sh</small></span></p>";

    ?>

    <a href="checkout.php"><button class='primary-btn' id='checkout-btn'>Proceed to checkout</button></a>
</body>

</html>