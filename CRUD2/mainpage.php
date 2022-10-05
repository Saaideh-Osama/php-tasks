<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style> button{width:7vw; 
height:7vh;
margin-left:80vw;
   background-color:brown;}
button >a{color:white;}
td{ color:black;
  background-color:#5bc0de
}
th {
  color:white;
  background-color:red;
}
</style>
</head>
<body>
    
<button><a href="insert.php"> Add a new employee </a></button>

</body>
</html>
<?php
$GLOBALS['edit']='edit.php';
$GLOBALS['delete']='delete.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table table-bordered table-striped'>
  <thead>
      <tr>
          <th>id
</th>
          <th>image
</th>
          <th>name
</th>
          <th>address
</th>
          <th>salary
</th>
          <th>position
</th>
          <th>Action
</th>
</tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo 
    "<tr>
     <td>" .$row['id']."</td>"
     ?>
     <td>
                            <img src="<?php echo 'images/'. $row['image']; ?>" width='90' height='90'> 
                           </td>

                           <?php echo 
                           " <td>" .$row['names']."</td>
    <td>" .$row['addresss']."</td>
    <td>" .$row['salary']."</td>
    <td>" .$row['position']."</td>
    <td><div class='btn-group'>
     <a  href='edit.php?id=".$row['id']."'  ><img src='pen.svg' ></i></a> 
     <a  href='view.php?id=".$row['id']."'  ><img src='eye.svg' ></i></a> 
    <a  href='delete.php?id=".$row['id']."'  ><img src='trash-fill.svg' ></a>
    </div></td> 
   
    
</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();





?>
