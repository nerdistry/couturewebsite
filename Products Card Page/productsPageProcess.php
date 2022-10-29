<?php

require("..\Couture Connect\connection.php");

$sql = "SELECT * FROM adminFormProduct WHERE productId>=1";

$result = mysqli_query($conn,$sql);


?>