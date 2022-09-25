<?php
require_once('usertable.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM `users` WHERE id=$id";
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->query($sql)=== TRUE){
    echo "deletion successful";
}
else{
    echo "something went wrong";
;}

;}
else {
    die('id not provided')
;}




?>