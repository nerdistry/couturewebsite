<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:logreg.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css" type="text/css" media="screen">
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <title>•COUTURE•</title>
</head>

<body>

    <nav>
        <div class="logo">
            <p>•COUTURE•</p>
        </div>
        <ul>
            <li><a href="..\Products Card Page\productsPage.php">SHOP</a></li>
            <!-- <li><a href="">SALES</a></li> -->
            <!-- <li><a href="">SEARCH</a></li> -->
            <li><a href="..\User Login and Register\logreg.php">LOG IN/ SIGN UP</a></li>
            <li><a href="">CART(0)</a></li>
            <li><a href=""><?php
            echo"♞";
            echo $_SESSION["username"];
            echo"<a href='..\User Login and Register\logout.php'>Log Out</a>";
            

                ?>
                </li>
           

        </ul>
    </nav>
    <div class="image">
        <img class="imgFindYourStyle" src="../Couture Images/firstpic.jpg" alt="FIND YOUR STYLE">
        <h1 class="heading">FIND YOUR <span>STYLE</span></h1>
    </div>



    <!-- <img src="imageShopinHome.jpg" alt="Shop" style="width:100%"> -->

    <div class=" imginHome">
        <div class="buyNowShopButton">
            <h1>SHOP</h1>
            <h5>NEW COLLECTION & MUST HAVE</h5>
            <div class="center1">
                <ul class="buttons">
                    <li><a href="">BUY NOW</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class=" imginHome2">
        <!-- <img src="imageSalesinHome.jpg " alt="Sales" style="width:100%"> -->

        <div class="buyNowSalesButton">
            <h1>SALES</h1>
            <h5>UP TO 50% OFF</h5>
            <div class="center2">
                <ul class="buttons">
                    <li><a href="">BUY NOW</a></li>
                </ul>
            </div>
        </div>
    </div>

    <br/>

    <h3>

        <....> FOR THE MOST DARING FASHION EDGE APPAREL</h3>

    <br/>
    <div class="row">
        <div class="column">
            <img src="..\Couture Images\trenchcoat.jpg" alt="Trenchcoat" width="100%">
            <span class="photoDescTrench"> TRENCH COAT KSH. 2,800</span>
        </div>
        <div class="column">
            <img src="..\Couture Images\summervest.jpg" alt="Summer Vest" width="100%">
            <span class="photoDescVest"> SUMMER VEST KSH. 1,100</span>
        </div>
        <div class="column">
            <img src="..\Couture Images\plaidskirt.jpg" alt="Plaidskirt" width="100%">
            <span class="photoDescPlaid"> PLAID SKIRT KSH. 1,900</span>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
    <div class="acarthome">
        <ul>
            <li class="acarthome1"><a href="">ADD TO CART</a></li>
            <li class="acarthome2"><a href="">ADD TO CART</a></li>
            <li class="acarthome3"><a href="">ADD TO CART</a></li>

        </ul>
    </div>

    <br>
    <br>
    <br>

    <div class="rev-section">
        <br>
        <br>
        <h4>BIG MOMENTS OVERVIEW OF COUTURE</h4>
        <br>
        <br>
        <hr>
        <br>
        <br>

        <div class="reviews">
            <div class="review">
                <div class="head-review">
                    <img class="imagesforreview" src="../Couture Images/lupita.jpeg" alt="Lupita" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">LUPITA NYONG'O</div>
                    <div class="place-review">Kenya</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">@couture SATIN DRESS is a mucst have. :)</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img class="imagesforreview" src="../Couture Images/vera.jpeg" alt="Vera" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">VERA SIDIKA</div>
                    <div class="place-review">Kenya</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">Couture really came through, excellent service.</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img class="imagesforreview" src="../Couture Images/lilianmuli.jpg" alt="Lilian" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">LILIAN MULI</div>
                    <div class="place-review">Kenya</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">Playing dress up with Couture. XD
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img class="imagesforreview" src="../Couture Images/betty.jpeg" alt="Betty" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">BETTY KYALO</div>
                    <div class="place-review">Kenya</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">You can never have too much of Couture designs.</div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer">
        <p>CONTACTS || ABOUT US || SHIPPING INFO</p>
    </div>
    <address class="copyright">Copyright © 2022 •COUTURE• All rights reserved.</address>
</body>

</html>