<?php

require("..\Couture Connect\connection.php");

$id = $_POST['editorder'];

if (isset($_POST['update_order'])) {
  $sql = "SELECT * FROM tbl_orderdetails INNER JOIN adminformproduct ON tbl_orderdetails.productId=adminformproduct.productId INNER JOIN tbl_order ON tbl_orderdetails.order_id=tbl_order.order_id INNER JOIN users ON tbl_order.userId = users.userId WHERE order_status !=1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  $order_id = $row["order_id"];
  $customer_name = $row["username"];
  $product_name = $row["productName"];
  $order_quantity = $row["order_quantity"];
  
  $order_status = $row["order_status"];

}
?>

<?php
if (isset($_POST['delete'])) {

  $del_sql = "DELETE FROM tbl_order WHERE order_id='$id'";
  mysqli_query($conn, $del_sql);
  echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
  header("location:vieworders.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Edit Order</title>
  <link rel="stylesheet" href="..\Admin Product Form\adminFormProductStyles.css">
</head>

<body>
  <div class="header">
    <h1> •COUTURE•</h1>
    <p>
    <h1>EDIT ORDERS</h1>
    </p>

  </div>
  <br />
  <br />
  <form action="updateEditedOrders.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" id="order_id" name="order_id" value=<?php echo $order_id; ?> readonly required>
    <input type="text" id="order_id" name="username" value=<?php echo $customer_name; ?> readonly required>

    <input type="text" id="product-name" placeholder="ProductName" name="productName" value=<?php echo "$product_name"; ?> readonly required>


    <br>
    <br>


    <br>
    <br>

    <input type="text" id="order_quantity" placeholder="ProductName" name="order_quantity" value=<?php echo "$order_quantity"; ?> contenteditable="true">

    <!-- <input type="text" id="product-name" placeholder="ProductName" name="productName" value=<?php echo "$order_status"; ?> contenteditable="true"> -->
    <select name="order_status" id="">
      <option value="1">Pending</option>
      <option value="2">Pending Payment</option>
      <option value="3">Paid</option>
    </select>

   
    <input class="btn" id="add-btn" type="submit" value="Update Order" name="AddOrder">
    <br>
    <br>


    </div>

  </form>



</body>

</html>