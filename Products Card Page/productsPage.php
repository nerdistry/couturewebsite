<?php
require_once("productsPageProcess.php");

if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productsPage.css" type="text/css" media="screen">
    <!-- <link rel="stylesheet" href="..\Home Page\indexstyle.php"> -->
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <title>Product</title>
</head>

<body>
<nav>
        <div class="logo">
            <p>•COUTURE•</p>
        </div>
        <ul>
            <li><a href="..\couturewebsite\Products Card Page\productsPage.php">SHOP</a></li>
            <!-- <li><a href="">SALES</a></li> -->
            <!-- <li><a href="">SEARCH</a></li> -->
            <li><a href="..\User Login and Register\logreg.php">LOG IN/ SIGN UP</a></li>
            <li><a href="..\Add to Cart\history.php">History</a></li>
            <li><a href=""><?php
            echo"♞";
            echo $_SESSION["username"];
            echo"<a href='..\User Login and Register\logout.php'>Log Out</a>";
            

                ?>
                </li>
           

        </ul>
    </nav>

 
    <div class="container">
        <!-- <form action=''>
        <input type='hidden' name='productId' value='$row["productId"]'>
        <button class='addtocart' type='submit'>Add To Cart</button>
        </form> -->

        <!-- <input type='submit' class='addtocart' value='Add To Cart'> -->
        <?php
        while ($row = mysqli_fetch_assoc($result)) {


            // print_r($row);



            // echo"<div class=\"column\">";

            echo "<div class = 'content'>";

            echo "<div class = 'imagefit'>";

            echo "<img src=\"../GetUploadedImages/" . $row["image"] . "\">";

            echo "</div>";

            echo "<div class='details'>";
            echo "<p>" . $row["productName"];

            echo " Ksh." . $row["price"] . "</p>";
            echo "</div>";


            echo "<p>" . $row["description"] . "</p>";


            echo " <form action='..\Add to Cart\add_cart.php'>
            <input type='hidden' name='productId' value='" . $row['productId'] . "'>

            
           
            
            <button class='addtocart' value='Add To Cart'>Add To Cart</button>

            
            
            </form>";

            

            // echo"
            // <img src=\"../GetUploadedImages/".$row["image"]."\"width=\"100\" height=\"100\">

            // <h1>".$row["productName"]."<h1>

            // <p>Ksh.".$row["price"]."</p>

            // <p>".$row["description"]."</p>

            // ";
            echo "</div>";
        }
        ?>

<!-- <input type='submit' class='addtocart' value='Add To Cart'> -->

        <!-- <button class='addtocart' value='Add To Cart' data-id='anyid'>Add To Cart</button>

        </form>";
    </div> -->


    <!-- <div class="address">
        <address class="copyright">Copyright © 2022 •COUTURE• All rights reserved.</address>
    </div> -->
    <script>
        $(document).ready(function() {
            $('button').click(function() {
                id = $(this).data('id');
                console.log(id)
            })
        })
    </script>
</body>

</html>