<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="form.css">
</head>

<html>
<body>
  <form action="formprocess.php" method="POST">
    <fieldset>
      <legend>Personalia:</legend>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username">
<br>
<br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Password"required>
<br>
<br>
    <label for="confirm_pass">Confirm Password</label>
    <input type="text" name="confirm_password" id="confirm_password" placeholder="Confirm Password"required>
<br>
<br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" placeholder="Address" required>
<br>
<br>
<label for="gender">Gender</label>

<input type="radio" name="gender" value="male">
<label for="male">Male</label>


<input type="radio" name="gender" value="female">
<label for="female">Female</label>

<br>
<br>
<input type="checkbox" id="terms">
<label for="terms">I accept Terms and Conditions</label>
<br>
<br>
    <input type="submit" value="Submit"name="submit">
    <input type="Submit" value="Clear">

    
  </fieldset>
  </form>
  <?php
$op2 = "be"; 
function	foo ($opl)
{
global $op2; 
echo $op2; 
echo $opl;
}
foo (" awesome") ;
?>

<?php
function	foo2 ($msg){
echo "$msg" ;
}
$varl = "foo2";
$varl("This works!!");
?>
<?php
$country = array ("Mauritius" => array
("population"	=> "1,265,985","capital" => "Port Luis") ,
"Maldive" => array ("population"=>	"133,412",
"capital" => "Male"));
echo $country["Mauritius"] ["population"];
 
?>
</body>
</html>