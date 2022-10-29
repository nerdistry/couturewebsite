<?php

require("..\Couture Connect\connection.php");

$id = $_POST['editproduct'];


if (isset($_POST['update_product'])) {
  $sql = "SELECT * FROM adminFormProduct where productId='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  $productID = $row["productId"];
  $product_name = $row["productName"];
  $product_desc = $row["description"];
  # $product_image = $row["image"];
  $product_price = $row["price"];
  $product_available = $row["item"];
  # $subcategory_id = $row["sub_category_ID"];
  # $category = $row['categoryID'];



  $size = $row["size"];
}
?>

<?php
if (isset($_POST['delete'])) {

  $del_sql = "DELETE FROM adminformproduct WHERE productId='$id'";
  mysqli_query($conn, $del_sql);
  echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
  header("location:displayProducts.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Edit Product</title>
  <link rel="stylesheet" href="..\Admin Product Form\adminFormProductStyles.css">
</head>

<body>
  <div class="header">
    <h1> •COUTURE•</h1>
    <p>
    <h1>EDIT PRODUCT FORM</h1>
    </p>

  </div>
  <br />
  <br />
  <form action="updateEditedProducts.php" method="POST" enctype="multipart/form-data">
    <input type="number" id="productId" name="productId" value=<?php echo "$productID"; ?> contenteditable="true">

    <input type="text" id="product-name" placeholder="ProductName" name="productName" value=<?php echo "$product_name"; ?> readonly required>


    <br>
    <br>

    <textarea id="des" placeholder="detailed description" name="description" contenteditable="true"><?php echo "$product_desc"; ?></textarea>

    <br>
    <br>



    <div class="select-sizes">
      <p class="text">sizes available:</p>
      <div class="sizes">
        <input type="checkbox" class="size-checkbox" id="xs" value="<?php echo "$size"; ?> xs" name="size">
        <input type="checkbox" class="size-checkbox" id="s" value="<?php echo "$size"; ?> s" name="size">
        <input type="checkbox" class="size-checkbox" id="m" value="<?php echo "$size"; ?>" name="size">
        <input type="checkbox" class="size-checkbox" id="l" value="<?php echo "$size"; ?>" name="size">
        <input type="checkbox" class="size-checkbox" id="xl" value="<?php echo "$size"; ?>xl" name="size">
        <input type="checkbox" class="size-checkbox" id="xxl" value="<?php echo "$size"; ?>xxl" name="size">
        <input type="checkbox" class="size-checkbox" id="xxxl" value="<?php echo "$size"; ?>xxxl" name="size">
      </div>
    </div>
    </div>

    <div class="product-price">
      <input type="number" id="actual-price" placeholder="new price" name="price" value=<?php echo "$product_desc"; ?> contenteditable="true">

    </div>
    <br>


    <input type="number" id="stock" min="20" placeholder="Item in stocks (minimum 20)" name="item" value=<?php echo "$product_available"; ?> contenteditable="true">
    <br>
    <br>


    <br>
    <br>

    <p class="text">Date Updated:</p>

    <input type="datetime-local" name="dateAndTime">
    <br>
    <br>
    <input class="btn" id="add-btn" type="submit" value="Update Product" name="AddProduct">
    <br>
    <br>


    </div>

  </form>



</body>

</html>