<?php

require("connection.php");

$orderid = $_POST["orderid"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$CompanyName = $_POST["CompanyName"];
$Country = $_POST["Country"];
$StreetAddress = $_POST["StreetAddress"];
$TownOrCity = $_POST["TownOrCity"];
$StateOrCounty = $_POST["StateOrCounty"];
$Zip = $_POST["Zip"];
$Phone = $_POST["Phone"];
$EmailAddress = $_POST["EmailAddress"];
$wallet = $_POST["wallet"];
$dateandtime = $_POST["dateandtime"];


// $sql = "INSERT INTO adminform2_productOrder (FirstName, LastName, CompanyName, Country, StreetAddress, TownOrCity, StateOrCounty, Zip, Phone, EmailAddress, wallet, dateandtime)
//   VALUES ('$FirstName', '$LastName', '$CompanyName', '$Country', '$StreetAddress', '$TownOrCity', '$StateOrCounty', '$Zip', $Phone, '$EmailAddress','$wallet','$dateandtime')";

$sql = "SELECT orderid, FirstName, LastName, CompanyName, Country, StreetAddress, TownOrCity, StateOrCounty, Zip, Phone, EmailAddress, wallet, dateandtime FROM adminform2_productOrder";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<br>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "Id: " . $row["orderid"] . "<br>"
      . "Name: " . $row["FirstName"] . " " . $row["LastName"] . "<br>"
      . "Name of Company: " . $row["CompanyName"] . "<br>"
      . "Country: " . $row["Country"] . "<br>"
      . "Street Address: " . $row["StreetAddress"] . "<br>"
      . "Town or City: " . $row["TownOrCity"] . "<br>"
      . "Zip: " . $row["Zip"] . "<br>"
      . "Phone: " . $row["Phone"] . "<br>"
      . "Email Address: " . $row["EmailAddress"] . "<br>";
    #. "Wallet: " . $row["wallet"] . "<br>"
    #. "Date & Time: " . $row["dateandtime"] . "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

// print_r($result);

// if (mysqli_query($conn, $sql)) {
//   echo " New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
