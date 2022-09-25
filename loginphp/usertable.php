

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<?php
$GLOBALS['edit']='edit.php';
$GLOBALS['delete']='delete.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table table-bordered table-striped'>
  <thead>
      <tr>
          <th>id
</th>
          <th>firstname
</th>
          <th>middlename
</th>
          <th>last name
</th>
          <th>family name
</th>
          <th>phone
</th>
          <th>date of birth
</th>
          <th>email
</th>
          <th>password
</th>
          <th>user role
</th>
          <th >edit
</th>
          <th >delete
</th>
</tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo 
    "<tr>
     <td>" .$row['id']."</td>
    <td>" .$row['firstname']."</td>
    <td>" .$row['middlename']."</td>
    <td>" .$row['lastname']."</td>
    <td>" .$row['familyname']."</td>
    <td>" .$row['phone']."</td>
    <td>" .$row['dateofbirth']."</td>
    <td>" .$row['email']."</td>
    <td>" .$row['passwords']."</td>
    <td>" .$row['user_role']."</td>
    <td><div class='btn-group'>
     <a  href='edit.php?id=".$row['id']."'  >edit</a></td> 
    <td><a  href='delete.php?id=".$row['id']."'  >delete</a></div></td> 
   
    
</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();





?>


</div>
</body>
</html>

<!-- "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>""<tr> -->