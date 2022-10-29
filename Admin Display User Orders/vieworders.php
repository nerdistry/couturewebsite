<?php
require("..\Couture Connect\connection.php");

if (isset($_GET['order_id'])) {
  $id = $_GET['order_id'];
  $delete = mysqli_query($conn, "DELETE FROM `tbl_orders` WHERE 'order_id'='$id'");
}

$sql = "SELECT * FROM tbl_orderdetails INNER JOIN adminformproduct ON tbl_orderdetails.productId=adminformproduct.productId INNER JOIN tbl_order ON tbl_orderdetails.order_id=tbl_order.order_id INNER JOIN users ON tbl_order.userId = users.userId WHERE order_status !=1";
$query_run = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Orders</title>
  <link rel="stylesheet" href="../Admin Display Products/displayProductsStyles.php">
</head>

<body>
  <h1>COUTURE</h1>

  <br>
  <br>
  <table>
    <tr>
      <th colspan="8">
        <h2>ORDERS TABLE</h2>
      </th>
    </tr>
    <tr>

      <th>Customer Name</th>
      <th>Product Name</th>
      <th>Order Quantity</th>
      <th>TOTAL</th>
      <th>Order Status</th>
      <th>Date Ordered</th>
      <th>Alter</th>
      <th>Remove</th>

    </tr>

    <?php

    $num = mysqli_num_rows($query_run);
    if ($num > 0) {
      while ($row = mysqli_fetch_array($query_run)) {
    ?>
        <tr>
          <td><?php echo $row['username'] ?></td>
          <td><?php echo $row['productName'] ?></td>
          <td><?php echo $row['order_quantity'] ?></td>
          <td><?php echo $row['orderdetails_total'] ?></td>
          <td><?php echo $row['order_status'] ?></td>
          <td><?php echo $row['created_at'] ?></td>


          <td>
            <form action="editorders.php" method="POST">
              <input type="hidden" value="<?php echo $row['order_id']; ?>" name="editorder">
              <input type="submit" value="EDIT" name="update_order" class="btn">
            </form>
          </td>

          <td>
            <form action="editorders.php" method="POST">
              <input type="hidden" value="<?php echo $row['order_id']; ?>" name="editorder">
              <input type="submit" value="DELETE" name="delete" class="btn">
            </form>
          </td>
        </tr> <?php }
          } ?>
  </table>
</body>

</html>