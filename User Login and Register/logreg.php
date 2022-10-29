<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="logregstyle.css">
</head>

<body>

    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="../Couture Images/icons8-facebook-30.png">
                <img src="../Couture Images/icons8-instagram-30.png">
                <img src="../Couture Images/icons8-twitter-50.png">
            </div>


            <form id="login" class="input-group" action="process_login.php" method="POST">
                <input type="text" name="username" class="input-field" placeholder="Username" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <!-- <input type="checkbox" class="chech-box"><span>Remember Password</span> -->

                <input type="submit" value="Login" class="submit-btn">
            </form>
            <form id="register" class="input-group" action="process_reg.php" method="POST">
                <input type="text" name="username" class="input-field" placeholder="Username" required>
                <input type="email" name="email" class="input-field" placeholder="Email" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="text" name="usertype" class="input-field" placeholder="User Type" required>
                <!-- <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions.</span> -->
                <input type="submit" class="submit-btn" value="Register">
            </form>

        </div>


       
    </div>


    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>

</body>


</html>