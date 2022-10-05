<?php
// require "connection.php";
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "enterprise";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// if(isset($POST['submit'])){
//     $names=$_POST['names'];
//     $addresss=$_POST['adresss'];
//     $salary=$_POST['salary'];
//     $position=$_POST['position'];}
//     $sql="INSERT INTO employees (names , addresss , salary , position) VALUES('$names','$addresss','$salary','$position')";
//     $result=mysqli_query($conn,$sql);
// if ($result){
//     echo "data added successfully";
// }


    $names=$_POST['names'];
    $addresss=$_POST['addresss'];
    $salary=$_POST['salary'];
    $image=$_POST['image'];
    $position=$_POST['position'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "enterprise";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($POST['submit'])){
    $names=$_POST['names'];
    $addresss=$_POST['addresss'];
    $salary=$_POST['salary'];
    $username=stripslashes($_POST['name']);
    $image=time() . '-' . $_FILES['image']['name'];
    $target_dir="images/";
    $target_file=$target_dir . basename($image);
    
    $position=$_POST['position'];}
    $sql="INSERT INTO `employees`(`id`, `image`, `names`, `addresss`, `salary`, `position`, `Action`) VALUES ('','$image','$names','$addresss','$salary','$position','')";
    if ($conn->query($sql) === TRUE){ echo "New record created successfully";}
    else { echo "Error: " . $sql . "<br>" . $conn->error;}
    $conn->close();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>body{margin-left:20px;
    margin-right:20px;}</style>
</head>
<body>
    
<form method="POST" Action="">
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" class="form-control" name="image">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" name="names">
  </div>
  <div class="form-group">
    <label for="addresss">address</label>
    <input type="text" class="form-control" name="addresss" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">salary</label>
    <input type="number" class="form-control" name="salary" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Position</label>
    <input type="text" class="form-control" name="position">
  </div>
    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>
