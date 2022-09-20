<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
URL : <input type="text" name="email">
  <button type="submit">GO!</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $GLOBALS['email'] = htmlspecialchars($_REQUEST['email']);
    if (empty($email)) {
        echo "Name is empty";
    } else {
        header("Location: $email");
        echo "<br>";
    ;}
;}


  session_start();
 
  if(isset($_SESSION['views'])){
     $_SESSION['views'] = $_SESSION['views']+ 1;
  }else{
     $_SESSION['views'] = 1;
  }
  echo "Total page views = ". $_SESSION['views'];

?>
