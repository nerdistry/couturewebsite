<?php require("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Users</title>
  <link rel="stylesheet" href="adminform2userstablestyles.php">
</head>

<body>
  <h1>•COUTURE•</h1>
  <br>
  <br>
  <table>
    <tr>
      <th colspan="12">
        <h2>User Data</h2>
      </th>
    </tr>
    <tr>
      <th id="id">User Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Company</th>
      <th>Country</th>
      <th>Street Address</th>
      <th>Town or City</th>
      <th>State or County</th>
      <th>Zip</th>
      <th>Phone</th>
      <th>Email Address</th>
      <th>Alter</th>
      <!-- <th>Wallet</th>
      <th>Date & Time</th> -->
    </tr> <?php $sql = "SELECT orderid, FirstName, LastName, CompanyName, Country, StreetAddress, TownOrCity, StateOrCounty, Zip, Phone, EmailAddress FROM adminform2_productOrder";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?> <tr>
          <td><?php echo $row['orderid'] ?></td>
          <td><?php echo $row['FirstName'] ?></td>
          <td><?php echo $row['LastName'] ?></td>
          <td><?php echo $row['CompanyName'] ?></td>
          <td><?php echo $row['Country'] ?></td>
          <td><?php echo $row['StreetAddress'] ?></td>
          <td><?php echo $row['TownOrCity'] ?></td>
          <td><?php echo $row['StateOrCounty'] ?></td>
          <td><?php echo $row['Zip'] ?></td>
          <td><?php echo $row['Phone'] ?></td>
          <td><?php echo $row['EmailAddress'] ?></td>
          <td>
            <button class="btn"><a href="#">Edit</a></button>
          </td>
        </tr> <?php }
          } ?>
  </table>
</body>

</html>