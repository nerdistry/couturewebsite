<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="adminloginstyle.php">
</head>

<body>


    <div class="hero">
        <div class="form-box">
            <div class="hello-box">
                <div id="hello"></div>
                Hey there Admin!
            </div>
            <div class="social-icons">
                <img src="icons8-facebook-30.png">
                <img src="icons8-instagram-30.png">
                <img src="icons8-twitter-24.png">
            </div>


            <form id="login" class="input-group" action="adminlogin_process.php" method="POST">
                <input type="text" name="Username" class="input-field" placeholder="Username" required>
                <input type="text" name="Password" class="input-field" placeholder="Enter Password" required>
                <input type="text" name="Role" class="input-field" placeholder="Your Role" required>
                <input type="checkbox" class="chech-box"><span>Remember Password</span>

                <a href="admininteractive.php">
                    <button id="myloginbtn" type="submit" value="LogIn" class="submit-btn">Log in
                </a>
                </button>

            </form>


        </div>
    </div>

</body>


</html>