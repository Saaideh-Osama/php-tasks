


<?php


$dsn ='mysql:host=localhost;dbname=shop';  // data source name
    $user = 'root';  // the user to connect
    $pass = ''; //password of this user



    try {

        $db = new PDO ( $dsn , $user , $pass );  ///start a new connection with pdo  class

        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        $q = "UPDATE customers
        SET firstname= 'alaikom', lastname ='salam' 
        WHERE costumer_id=5 ";
        
        $db->exec($q);




        
    } catch (PDOException $e) {
        echo 'Failed' . $e->getMessage();
    }
?>
