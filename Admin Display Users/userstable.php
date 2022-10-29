<?php require("../Couture Connect/connection.php"); 

if (isset($_GET['userId'])) {
  $id = $_GET['userId'];
  $delete = mysqli_query($conn, "DELETE FROM `users` WHERE 'userId'='$id'");
}

$query = "SELECT * FROM users";
$query_run = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Users</title>
  <link rel="stylesheet" href="usersTableStyles.php">
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
      <th>Full Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>User Type</th>
      <th>Alter</th>
      <th>Remove</th>

    </tr> <?php 
    // $sql = "SELECT userId, username, email, password,usertype FROM users";
         $num = mysqli_num_rows($query_run);
         if ($num > 0) {
           while ($row = mysqli_fetch_array($query_run)) { 
            ?> 
            <tr>
          <td><?php echo $row['userId'] ?></td>
          <td><?php echo $row['username'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo $row['password'] ?></td>
          <td><?php echo $row['usertype'] ?></td>
          <td>
          <form action="editUsers.php" method="POST">
               <input type="hidden" value="<?php echo $row['userId']; ?>" name="edituser">
               <input type="submit" value="EDIT" name="update_user" class="btn">
             </form>
           </td>

           <td>
           <form action="editUsers.php" method="POST">
             <input type="hidden" value="<?php echo $row['userId']; ?>" name="edituser">
             <input type="submit" value="DELETE" name="delete" class="btn">
           </form>
           </td>
         </tr> <?php }
            } ?>
  </table>
</body>

</html>