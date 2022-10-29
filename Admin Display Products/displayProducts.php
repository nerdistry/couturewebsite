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
       <th id="id">Product Name</th>
       <th>Description</th>
       <th>Image</th>
       <th>Size</th>
       <th>Price</th>
       <th>Discount Percentage</th>
       <th>Selling Price</th>
       <th>Item</th>
       <th>Category</th>
       <th>Subcategory</th>
       <th>Date and Time</th>
       <th>Alter</th>
       <th>Remove</th>
       <!-- <th>Wallet</th>
      <th>Date & Time</th> -->
     </tr>

     <?php
      // $sql = "SELECT productName,description,image,size,price,discountPercentage,sellingPrice,item, category,subcategory,dateAndTime FROM adminFormProduct";

      $num = mysqli_num_rows($query_run);
      if ($num > 0) {
        while ($row = mysqli_fetch_array($query_run)) {
      ?>
         <tr>
           <td><?php echo $row['productName'] ?></td>
           <td><?php echo $row['description'] ?></td>
           <td><img src="../GetUploadedImages/<?php echo $row['image'] ?>" alt="" height="100">
           </td>
           <td><?php echo $row['size'] ?></td>
           <td><?php echo $row['price'] ?></td>
           <td><?php echo $row['discountPercentage'] ?></td>
           <td><?php echo $row['sellingPrice'] ?></td>
           <td><?php echo $row['item'] ?></td>
           <td><?php echo $row['category'] ?>

           </td>
           <td><?php echo $row['subcategory'] ?></td>

           <td><?php echo $row['dateAndTime'] ?></td>
           <td>

             <form action="editProducts.php" method="POST">
               <input type="hidden" value="<?php echo $row['productId']; ?>" name="editproduct">
               <input type="submit" value="EDIT" name="update_product" class="btn">
             </form>
           </td>

           <td>
           <form action="editProducts.php" method="POST">
             <input type="hidden" value="<?php echo $row['productId']; ?>" name="editproduct">
             <input type="submit" value="DELETE" name="delete" class="btn">
           </form>
           </td>

         </tr> <?php }
            } ?>
   </table>
 </body>

 </html>