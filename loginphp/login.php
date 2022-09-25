<?php

session_start();

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'register');


	$password = $_POST['loginpassword'];
	$email = $_POST['loginemail'];
$s = "SELECT * FROM users where email='$email' && passwords='$password'";

$result = mysqli_query($conn,$s);
 $num = mysqli_num_rows($result);
 

$sql="SELECT * FROM users where email='$email'";
$row = $result->fetch_assoc();
  $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if ($row['email'] === $email && $row['passwords'] === $password&&$row['user_role']=="1") {
                    echo "Logged in!";
 


                    header("Location:usertable.php");
 

                }else{header("location:home.php");}}
?>
