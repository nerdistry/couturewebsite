<?php

require('connect.php');

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_description'];
    $product_image = $_FILES['product_image']['name'];
    // $product_image_tmp =$_FILES['product_image']['tmp_name'];
    $product_price = $_POST['product_price'];
    $product_available = $_POST['available_quantity'];
    $subcategory_id = $_POST['subcategory_id'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];
    $added_by = $_POST['added_by'];
    $is_deleted = $_POST['is_deleted'];

    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/'. $product_image;
    move_uploaded_file($product_image_tmp_name, $product_image_folder);

    $update_data = "UPDATE tbl_product SET product_name='$product_name',product_description='$product_desc',product_image='$product_image',unit_price='$product_price', available_quantity='$product_available', subcategory_id='$subcategory_id', created_at='$created_at',updated_at='$updated_at',added_by='$added_by',is_deleted='$is_deleted' WHERE product_id = '$id'";
    $upload = mysqli_query($conn, $update_data);

   }

?>