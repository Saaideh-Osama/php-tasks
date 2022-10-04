<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
table{
  text-align:center;
}
h5{
    text-align:center;
}
h4{
    text-align:center ;
}
.data{
    display: flex;
    flex-direction: row;
    align-content: stretch;
    background-color: #6189F6;
    padding: 50px;
    color: white;
}

.red{
    color: #f80710;
}
.green{
color:#53de6d ;
}
.black{
  color: black;
}

.orange{
  color:#8a7975;
}




    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>    
<body>
<?php  include "header.php"; 




?>




<?php
//  session_start();
 

 include "./Databaseconfig.php";

$query ="SELECT email,mobile,first_name,middle_name,last_name,family_name,salary,password ,user_type,id FROM signup_data WHERE  user_type='Admin'" ;

$sqlC="SELECT COUNT(id),SUM(salary) FROM signup_data";
$result = mysqli_query($conn, $sqlC);
$count = $result->fetch_array()[0] ?? '';

$sqlT="SELECT SUM(salary) FROM signup_data";
$result = mysqli_query($conn, $sqlT);
$total = $result->fetch_array()[0] ?? '';

$sqlT="SELECT MAX(salary) FROM signup_data";
$result = mysqli_query($conn, $sqlT);
$max = $result->fetch_array()[0] ?? '';


$sqlT="SELECT MIN(salary) FROM signup_data";
$result = mysqli_query($conn, $sqlT);
$min = $result->fetch_array()[0] ?? '';

$sqlT="SELECT MIN(salary) FROM signup_data";
$result = mysqli_query($conn, $sqlT);
$min = $result->fetch_array()[0] ?? '';


$sqlT="SELECT MIN(sign_up_date) FROM signup_data";
$result = mysqli_query($conn, $sqlT);
$date = $result->fetch_array()[0] ?? '';

$sqlT="SELECT first_name FROM signup_data WHERE  sign_up_date='$date'";
$result = mysqli_query($conn, $sqlT);
$namexx = $result->fetch_array()[0] ?? '';



 echo "<div  class='card text-center' >
 <div class='card-header'>
  <h4>Statistics</h4>
 </div>
 <div class='data'>

 <div  class='container text-center'>
 <div  class='row'>

 <div class='col' >
   <h5 ># of Emplyees</h5>
   <h6 class='black' >( " .$count ." ) <i class='bi bi-people-fill'></i>". " </h6>

 </div>

 <div class='col'>
   <h5 >Total Salary</h5>
   <h6 class='black' >( ".$total." ) <i class='bi bi-currency-exchange'></i>". "</h6>

 </div>

 <div class='col'>
   <h5 >Highest Salary</h5>
   <h6 class='green' >( ". $max ." ) <i class='bi bi-chevron-up'></i>". "</h6>

 </div>

 <div class='col'>
   <h5 class='card-title'>Lowest Salary</h5>
   <h6 class='red' >( ". $min ." ) <i class='bi bi-chevron-down'></i>"."</h6>

 </div>


 <div class='col'>
   <h5 class='card-title'>Our Oldest Employee</h5>
   <h6 class='black' >[ ".$namexx." ] "."</h6>
   <h6 class='black' >( ".$date." ) "."</h6>

 </div>




</div>    </div>

</div>
<div class='card-header'>
</div><br>"

;























?>

</html>








<?php include 'footer.php';?> 
