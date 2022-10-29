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
    <link rel="stylesheet" href="admininteractivestyle.php">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Couture Admin</title>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-couture"></span>•COUTURE•</h2>
        </div>

        <div class="sidebar-menu">

            <ul>
                <li>
                    <a href="" class="active"><span class="las la-keyboard"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="..\Admin Display Users\userstable.php"><span class="las la-users"></span>
                        <span>Customers</span></a>
                </li>
                <li>
                    <a href="..\Admin Product Form\adminFormProduct.php"><span class="las la-clipboard-list"></span>
                        <span>Add Product</span></a>
                </li>
                <li>
                    <a href="..\Admin Display User Orders\vieworders.php"><span class="las la-shipping-fast"></span>
                        <span>Orders</span></a>
                </li>
                <li>
                    <a href="..\Admin Display Products\displayProducts.php"><span class="las la-receipt"></span>
                        <span>Inventory</span></a>
                </li>
                <li>
                    <a href="..\Admin Category and Subcategory\addCategory.php"><span class="las la-user-circle"></span>
                        <span>Category</span></a>
                </li>
                <li>
                    <a href="..\Admin Category and Subcategory\addSubCategory.php"><span class="las la-clipboard-list"></span>
                        <span>Sub category</span></a>
                </li>


            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label> Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>

            <div class="user-wrapper">
                <img src="..\Couture Images\profile.jpeg" width="50px" height="40px" alt="">
                <div>
                    <h4> <?php
                     echo "♞";
                     echo $_SESSION["username"];
                        ?>
                    </h4>
                    <small> <?php echo"<a href='..\User Login and Register\logout.php'>Log Out</a>";
                    ?> </small>
                </div>
            </div>
        </header>

        <main>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Ksh 6000000</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Recent Projects
                            </h3>
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <table width="100% ">
                                <thead>
                                    <tr>
                                        <td>Project Tile</td>
                                        <td>Department</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status">review</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web Development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status">In Progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td>
                                            <span class="status">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status">review</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web Development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status">In Progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td>
                                            <span class="status">Pending</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                New customer
                            </h3>
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div>
                                    <img src="..\Couture Images\cynthia.jpeg" width="50px" height="40px" alt="">
                                    <div>
                                        <h4>Cynthia Avilia</h4>
                                        <small>Marketing Executive</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="las la-user-circle">
                                    </span>
                                    <span class="las la-comment">
                                    </span>
                                    <span class="las la-phone">
                                    </span>
                                </div>

                            </div>
                            <div class="customer">
                                <div>
                                    <img src="..\Couture Images\derek.jpeg" width="50px" height="40px" alt="">
                                    <div>
                                        <h4>Derek Prince</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="las la-user-circle">
                                    </span>
                                    <span class="las la-comment">
                                    </span>
                                    <span class="las la-phone">
                                    </span>
                                </div>

                            </div>

                            <div class="customer">
                                <div>
                                    <img src="..\Couture Images\dejuan.jpeg" width="50px" height="40px" alt="">
                                    <div>
                                        <h4>Dejuan Oyamo</h4>
                                        <small>COO</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="las la-user-circle">
                                    </span>
                                    <span class="las la-comment">
                                    </span>
                                    <span class="las la-phone">
                                    </span>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </main>
    </div>
</body>

</html>