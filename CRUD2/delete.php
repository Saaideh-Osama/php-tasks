<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> button{
width:10vw;
height:7vh;
font-size:1.2rem;
position:absolute;
right: 5vh;
top:5vh;
background-color:#e84c3d;
color:white;
border-radius:15px;
border:0px solid transparent;

}
  </style>
<body>
    
<a href="mainpage.php"><button> back to main page  </button></a>
</body>
</html>


<?php
require "connection.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM `employees` WHERE id=$id";
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "enterprise";

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