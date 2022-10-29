<?php
 
 require("../Couture Connect/connection.php");

 $subcategoryName = $_POST["subcategoryName"];
 $categoryId = $_POST["categoryId"];


 $sql = "INSERT INTO subcategories(subcategoryName, categoryId) VALUES ('$subcategoryName','$categoryId')";
 
 if(mysqli_query($conn,$sql)){
 echo"Record has been created successfully! :)"."<br/>";

 }
 else{

     echo"Error:" .$sql. "<br/>" .mysqli_error($conn);
 }



?>
