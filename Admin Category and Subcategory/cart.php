<?php
require("..\Couture Connect\connection.php");

if (isset($_GET['productId'])) {
    $id = $_GET['productId'];
    $delete = mysqli_query($conn, "DELETE FROM `products` WHERE 'productId'='$id'");
}

$query = "SELECT* FROM adminFormProduct";
$query_run = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Products</title>
  <link rel="stylesheet" href="displayProductsStyles.php">
</head>

<body>
  <h1>•COUTURE•</h1>
  <br>
  <br>
  <table>
    <tr>
      <th colspan="13">
        <h2>Products</h2>
      </th>
    </tr>
    <tr>
    <th>Image</th>
      <th>Product Name</th>
      <th>Price</th>

      <th>Quantity</th>
      <th>Action</th>
 
      <!-- <th>Wallet</th>
      <th>Date & Time</th> -->
    </tr> 
<tbody>
     <?php
     $grand_total = 0;
     $cart_query = mysqli_query($conn, "SELECT * FROM adminformproduct") or die('Query Failed');
     if(mysqli_num_rows($cart_query)>0){
      while($fetch_cart = mysqli_fetch_assoc($cart_query)){
     ?>
<tr>
  <td>
    <img src="../GetUploadedImages/<?php echo $fetch_cart['image'];?>" width="200px" alt="">
  </td>
  <td>
  <?php echo $fetch_cart['productName'];?>
  </td>
  <td>
  <?php echo $fetch_cart['price'];?>/-
  </td>

  <td>
    <form action="" method="POST">
      <input type="hidden" name ="productId" value="<?php echo $fetch_cart['productId'];?>">
      <input type="number" min="1" name="item" value="<?php echo $fetch_cart['item'];?>" >
      <input type="submit" name="Update Cart" value="Update">
    </form>
  </td>

  <td>
    <?php
    echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['item']);
     ?>/-
  </td>
  <td>
    <a href="/Home Page/index.php?remove=<?php echo $fetch_cart['productId'];?>"onclick="return confirm('Remove Item From Cart');">Remove</a>
  </td>
</tr>

<?php
$grand_total += $sub_total;
      };
    };
?>
<tr>
  <td
    colspan="4">Grand Total:
  </td>
  <td>
    <?php
    echo $grand_total; ?>/-</td>
  
  <td>
    <a href="/Home Page/index.php?delete_all" onclick="return confirm('Delete all from Cart?');"></a>Delete all
  </td>
</tr>
</tbody>
     </table>
</body>

</html>