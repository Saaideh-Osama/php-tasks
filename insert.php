<form name="form" action="" method="get">
    <label for="firstname">First name :</label>
  <input type="text" name="firstname" id="firstname" value="">
  <label for="middlename">Middle name :</label>
  <input type="text" name="middlename" id="middlename" value="">
  <label for="lastname">Last name :</label>
  <input type="text" name="lastname" id="lastname" value="">
  <input type="submit" name="submit">
</form> 

 


  

<?php


$dsn ='mysql:host=localhost;dbname=shop';  // data source name
    $user = 'root';  // the user to connect
    $pass = ''; //password of this user



    try {

        $db = new PDO ( $dsn , $user , $pass );  ///start a new connection with pdo  class

        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        $q = "INSERT INTO customers (costumer_id,firstname,lastname,emailaddress,numberofcomplaints) VALUES ('14','salam','alaikom','abdullah@gmail.com','6' )";
        
        $db->exec($q);

        //echo  'you are connect';



        
    } catch (PDOException $e) {
        echo 'Failed' . $e->getMessage();
    }




?>
