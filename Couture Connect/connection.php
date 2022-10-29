<?php
// ini_set("display_errors", "1");
// error_reporting(E_ALL);

#Variable declaration and assignment of value

// $servername = "127.0.0.1";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testcouture"; #AWESOME

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

