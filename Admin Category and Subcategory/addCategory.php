<?php

require("../Couture Connect/connection.php");

$sql = "SELECT * FROM categories";
$categoryresults = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="addCategorystyles.css">
    <title>Add Category</title>
</head>

<body>

    <h2><span class="lab la-couture"></span>•COUTURE•</h2>
    
    <br>

    <div class="form1">
        <div class="title">
            <h2>Add Category</h2>
        </div>
<br>
        <form action="categoryProcess.php" method="POST">
            <input type="text" id="category-name" placeholder="Category Name" name="categoryName">
            <br>
            <br>

            <input class="btn" id="add-btn" type="submit" value="Add Category" name="categoryButton">
        </form>
    </div>
    
</body>
</html>


