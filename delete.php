<?php


$dsn ='mysql:host=localhost;dbname=shop';  // data source name
    $user = 'root';  // the user to connect
    $pass = ''; //password of this user



    try {

        $db = new PDO ( $dsn , $user , $pass );  ///start a new connection with pdo  class

        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        $q = "DELETE FROM customers WHERE costumer_id=14";
        
        $db->exec($q);

        // echo  'you are connect';



        
    } catch (PDOException $e) {
        echo 'Failed' . $e->getMessage();
    }
?>
