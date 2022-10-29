<?php
require("..\Couture Connect\connection.php");

  $userID = $_POST["userId"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  



$update_data = "UPDATE users SET userId='$userID',username='$username',email='$email' WHERE userId ='$userID'";

if (mysqli_query($conn, $update_data)) {
    echo "Record updated successfully" . "<br/>";
    header("location:..\Admin Display Users\userstable.php");
} else {

    echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
    // header("location:edit.php");
}
?>