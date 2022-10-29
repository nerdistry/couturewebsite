<?php

require("../Couture Connect/connection.php");

$sql = "SELECT * FROM categories";
$all_ctgr2 = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="addCategorystyles.css">
    <title>Add Subcategory</title>
</head>

<body>

    <h2><span class="lab la-couture"></span>•COUTURE•</h2>
    <br>
    <div class="form1">
        <div class="title">
            <h2>Add SubCategory</h2>
        </div>
        <br>
        <form action="subCategoryProcess.php" method="POST">
            <input type="text" id="subcategory-name" placeholder="SubCategory Name" name="subcategoryName">
<br>
<br>

            <div class="categorySection">
            <label for="categoryId"> Category: </label>
            <select name="categoryId" id="categoryId"><br>
            <?php
                while ($category = mysqli_fetch_assoc($all_ctgr2)) :;
                ?>
                    <option value="<?php echo $category["categoryId"]; ?>">
                        <?php
                        echo $category["categoryName"];
                        ?>

                    </option>
                <?php
                endwhile;
                ?>
            </select>
            <br>
            <br>
        </div>
            <input class="btn" id="add-btn" type="submit" value="Add SubCategory" name="subcategoryButton">
    </form>
    </div>
</body>

</html>


