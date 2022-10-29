<?php

require("..\Couture Connect\connection.php");

$id = $_POST['edituser'];

if (isset($_POST['update_user'])) {
  $sql = "SELECT * FROM users where userId='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  $userID = $row["userId"];
  $username = $row["username"];
  $email = $row["email"];
  
}
?>

<?php
if (isset($_POST['delete'])) {

  $del_sql = "DELETE FROM users WHERE userId='$id'";
  mysqli_query($conn, $del_sql);
  echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
  header("location:userstable.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Edit Users</title>
  <link rel="stylesheet" href="..\Admin Product Form\adminFormProductStyles.css">
</head>

<body>
  <div class="header">
    <h1> •COUTURE•</h1>
    <p>
    <h1>EDIT USERS</h1>
    </p>

  </div>
  <br />
  <br />
  <form action="updateEditedUsers.php" method="POST" enctype="multipart/form-data">
    <input type="number" id="userId" name="userId" value=<?php echo "$userID"; ?> readonly required>

    <input type="text" id="username" placeholder="username" name="username" value=<?php echo "$username"; ?> contenteditable="true">


    <br>
    <br>

    <textarea id="des" placeholder="email" name="email" contenteditable="true"><?php echo "$email"; ?></textarea>

    <br>
    <br>

    <input class="btn" id="add-btn" type="submit" value="Update User" name="AddUser">
    <br>
    <br>


    </div>

  </form>



</body>

</html>