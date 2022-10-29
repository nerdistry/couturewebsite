<?php

require("..\Couture Connect\connection.php");

ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);

if (!isset($_SESSION)) {
  session_start();
  $user_id = $_SESSION['userId'];
}
$sql="UPDATE tbl_order SET order_status=3 where userId='$user_id'";
$result = mysqli_query($conn,$sql);
echo mysqli_error($conn);

$sql = $sql = "SELECT * FROM tbl_orderdetails INNER JOIN adminformproduct ON tbl_orderdetails.productId=adminformproduct.productId INNER JOIN tbl_order ON tbl_orderdetails.order_id=tbl_order.order_id WHERE order_status=3";
$result = mysqli_query($conn, $sql);

$total=0;

$total_prod=0;
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
      $cart_name = $row['product_name'];
      $cart_description = $row['description'];
      $cart_price = $row['price'];
      $quantity = $row['order_quantity'];
      $total_prod+=$quantity;
      $sub_total = $quantity * $cart_price;
      $total = $total + $sub_total;
      $details_id = $row['orderdetails_id'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Admin Order Form/adminform2styles.php">
  <title>Orders</title>
</head>

<body>
  <h2><span class="lab la-couture"></span>•COUTURE•</h2>
  <div class="container">
    <div class="title">
      <h2>Your Receipt Order</h2>
    </div>
    <div class="d-flex">
      <!-- <form action="adminform2_process.php" method="POST">
        <label>
          <span class="fname">First Name <span class="required">*</span></span>
          <input type="text" name="FirstName">
        </label>
        <label>
          <span class="lname">Last Name <span class="required">*</span></span>
          <input type="text" name="LastName">
        </label>


        <label>
          <span>Street Address <span class="required">*</span></span>
          <input type="text" name="StreetAddress" placeholder="House number and street name" required>
        </label>
        <label>
          <span>Town / City <span class="required">*</span></span>
          <input type="text" name="TownOrCity">
        </label>
        <label>
          <span>Postcode / ZIP <span class="required">*</span></span>
          <input type="text" name="Zip">
        </label>
        <label>
          <span>Phone <span class="required">*</span></span>
          <input type="tel" name="Phone">
        </label>
        -->

        <div class="Yorder">
          <table>
            <tr>
              <th colspan="2"><?php echo $_SESSION["username"] ?>:Confirm Your Order</th>
            </tr>
            <tr>
              <td>Total Products</td>
              <td><?php echo $total_prod ?></td>

            </tr>
            <tr>
              <td>Subtotal</td>
              <td><?php echo $total?></td>
            </tr>
            <tr>
              <td>Shipping</td>
              <td>Free shipping</td>
            </tr>
          </table><br>
          <div>
            <input type="radio" name="wallet" value="dbt" checked> Direct Bank Transfer
          </div>
          <p>
            Payment made directly into bank account.
          </p>
          <div>
            <input type="radio" name="wallet" value="CoD"> Cash on Delivery
          </div>
          <div>
            <input type="radio" name="wallet" value="Ppal"> Paypal <span>
              <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
            </span>
            <br>
            <br>
            <br>

            <!-- <p class="text">Date Created:</p>

            <input type="datetime-local" name="dateandtime"> -->

            <button id="DispatchOrderbtn" type="submit" value="Order">Dispatch Order</button>

            <!-- Yorder -->
          </div>
        </div>

      <!-- </form> -->

</body>

</html>