<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['update']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $name1 = mysqli_real_escape_string($conn, $_POST['name1']);
    $name2 = mysqli_real_escape_string($conn, $_POST['name2']);
    $name3 = mysqli_real_escape_string($conn, $_POST['name3']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $date = mysqli_real_escape_string($conn, $_POST['bod']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "UPDATE users SET firstname='$name', middlename='$name1',lastname='$name2',familyname='$name3',email='$email',dateofbirth='$date', passwords='$pass' WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);
    header("Location: usertable.php");
    exit(0);
    

}





?>