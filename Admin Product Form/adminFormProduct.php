<?php
require("..\Couture Connect\connection.php");

// $query="SELECT cs.categoryName,scs.subcategoryName FROM categories cs, subcategories scs WHERE cs.categoryId=scs.subcategoryId";

$sql1 = "SELECT * FROM categories";
$all_ctgr1 = mysqli_query($conn, $sql1);


$sql2 = "SELECT * FROM subcategories";
$all_ctgr2 = mysqli_query($conn, $sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="adminFormProductStyles.css">
    <title>Product Form</title>
</head>

<body>
<nav>
        <div class="logo">
            <p>•COUTURE•</p>
        </div>
    </nav>

    <div class="form">
        <div class="title">
            <br>
            <br>
            
            <h2>Product Inventory Form</h2>
        </div>
        <form action="adminFormProductProcess.php" method="POST" enctype="multipart/form-data">
            <input type="text" id="product-name" placeholder="ProductName" name="productName">

            <br>
            <br>

            <textarea id="des" placeholder="detailed description" name="description"></textarea>
            <br>
            <br>

            <!-- product image -->
            <div class="product-info">

                <div class="upload-image-sec">
                    <!-- upload inputs -->

                    <!-- <p class="text"><img src="" alt=""><span class="las la-upload"></span>Upload image:</p> -->
                    <p class="text"><span class="las la-upload"></span>Upload image:</p>

                    <div class="upload-catalouge">
                        <input type="File" class="fileupload" id="first-file-upload-btn" name="image" hidden>
                        <label for="first-file-upload-btn" class="upload-image"></label>
                        <label for="first-file-upload-btn" class="upload-image"></label>
                        <label for="first-file-upload-btn" class="upload-image"></label>
                        <label for="first-file-upload-btn" class="upload-image"></label>
                    </div>
                </div>

                <div class="select-sizes">
                    <p class="text">sizes available:</p>
                    <div class="sizes">
                        <input type="checkbox" class="size-checkbox" id="xs" value="xs" name="size">
                        <input type="checkbox" class="size-checkbox" id="s" value="s" name="size">
                        <input type="checkbox" class="size-checkbox" id="m" value="m" name="size">
                        <input type="checkbox" class="size-checkbox" id="l" value="l" name="size">
                        <input type="checkbox" class="size-checkbox" id="xl" value="xl" name="size">
                        <input type="checkbox" class="size-checkbox" id="xxl" value="xxl" name="size">
                        <input type="checkbox" class="size-checkbox" id="xxxl" value="xxxl" name="size">
                    </div>
                </div>
            </div>

            <div class="product-price">
                <input type="number" id="actual-price" placeholder="actual price" name="price">
                <input type="number" id="discount" placeholder="discount percentage" name="discountPercentage">
                <input type="number" id="sell-price" placeholder="selling price" name="sellingPrice">
            </div>
            <br>


            <input type="number" id="stock" min="20" placeholder="Item in stocks (minimum 20)" name="item">
            <br>
            <br>

            <!-- <p class="text">Category:</p>


            <select name="category" id="subCatName" class="dropdown">

                <option value="formal">Formal</option>
                <option value="casual">Casual</option>
                <option value="sports">Sports</option>

            </select> -->

            
            <div class="category">
            <p class="text">Category:</p>
            <select name="category" id="categoryId">
            <?php
                while ($category = mysqli_fetch_assoc($all_ctgr1)) :;
                ?>
                    <option value="<?php echo $category["categoryName"]; ?>">
                        <?php
                        echo $category["categoryName"];
                        ?>

                    </option>
                <?php
                endwhile;
                ?>
            </select>
        </div>

        <div class="sub_category">
        <p class="text">Subcategory:</p>
            <select name="subcategory" id="subcategoryId">
            <?php
                while ($subcategory = mysqli_fetch_assoc($all_ctgr2)) :;
            ?>
        <option value="<?php echo $subcategory["subcategoryName"]; ?>">
            <?php
            echo $subcategory["subcategoryName"];
            ?>

        </option>
            <?php
            endwhile;
            ?>

</select>


            <!-- <p class="text">Sub Category:</p>


            <select name="subcategory" id="subCatName" class="dropdown">

                <option value="dress">Dress</option>
                <option value="skirt">Skirt</option>
                <option value="trousers">Trousers</option>
                <option value="intimates">Intimates</option>
                <option value="t-shirt">T-shirt</option>
                <option value="blouse">Blouse</option>

            </select> -->

            <br>
            <br>

            <p class="text">Date Created:</p>

            <input type="datetime-local" name="dateAndTime">
            <br>
            <br>
            <input class="btn" id="add-btn" type="submit" value="Add Product" name="AddProduct">
            <!-- <button class="btn" id="save-btn">save draft</button> -->
            <br>
            <br>


    </div>
    </form>
</body>

</html>