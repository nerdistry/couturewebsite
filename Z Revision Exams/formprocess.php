<?php
require("..\Couture Connect\connection.php");

if(isset($_POST['submit'])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  $address = $_POST["address"];
  $gender=$_POST["gender"];

  $sql = "INSERT INTO revision_exams (username,password,confirm_password,address,gender)VALUES('$username','$password','$confirm_password','$address','$gender')";

  if(mysqli_query($conn,$sql)){
    echo"Submitted Successfully!";
  }
  else{
    echo"Error: ".$sql."<br>".mysqli_error($conn);
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      echo"Username is required";
    } else {
      $_POST["username"];
    
    }
    if (empty($_POST["password"])) {
      echo"Password is required";
    } else {
      $_POST["password"];
    
    }
    if ($_POST["password"] === $_POST["confirm_password"]) {
      echo"Success!";
   }
   else {
      echo"Reconfirm your password.";
   }
  
    if (empty($_POST["address"])) {
      echo"Email is required";
    } else {
      $_POST["address"];
      if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
        echo"Invalid email format";
          }
    
    }
    if (empty($_POST["gender"])) {
      echo"Gender is required";
    } else {
      $_POST["gender"];
    
    }
  }
}

?>