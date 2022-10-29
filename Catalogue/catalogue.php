<?php
require("..\Couture Connect\connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="section-body">
        <?php
        $sql = "SELECT *FROM AdminFormProduct INNER JOIN subcategories ON AdminFormProduct.subcategory=subcategories.subcategoryId WHERE categoryId=1;";

        $result = mysqli_query($conn, $sql);
        echo mysqli_error($conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $productName= $row['productName'];
            $description = $row['description'];
            $image = $row['image'];
            $size = $row['size'];
            $price = $row['price'];
            $discountPercentage = $row["discountPercentage"];
            $sellingPrice = $row["sellingPrice"];
            $item = $row["item"];
            $category = $row["category"];
            $subcategory = $row["subcategory"];
            $dateandtime = $row["dateAndTime"];
            $category ="SELECT * FROM categories WHERE categoryId=$subcategory";
            $result2 = mysqli_query($conn,$category);
            $categoryName = mysqli_fetch_assoc($result2)['category'];
            echo "
                <div class='product-card'>
                <img src='$image' alt='\Uploaded Images'>

                <div class='product-card-details'>
                <p class='product-gender'>
                    $categoryName
                </p>
                <p class='product-name'>$product</p>
                <p class='product-price'>$<small>sh</small></p>
                </div>
                </div>
                ";
        }
        ?>

    </div>
</body>
</html>
