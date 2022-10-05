<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enterprise";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $name = mysqli_real_escape_string($conn, $_POST['names']);
    $addresss = mysqli_real_escape_string($conn, $_POST['addresss']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    $query = "UPDATE employees SET image='$image', names='$name',addresss='$addresss',salary='$salary',position='$position' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    header("Location: mainpage.php");
    exit(0);
    

}