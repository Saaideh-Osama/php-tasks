<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  email: <input type="email" name="email">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  password: <input type="password" name="password">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_REQUEST['email']);
    $password = htmlspecialchars($_REQUEST['password']);
    if (empty($email)) {
        echo "Name is empty";
    } else {
        echo "the email is :  $email";
        echo "<br>";
        echo "the password is :  $password";
    ;}
;}





?>
