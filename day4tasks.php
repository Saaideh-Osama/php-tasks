<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <input type="text" name="URL">
<input type="submit">
</body>
</html>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $URL = htmlspecialchars($_REQUEST['URL']);
    if (empty($URL)) {
        echo "Name is empty";
   ; } else {
        echo "the URL is :  $URL";};} 
        echo "<br>";
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";
        echo "<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo "<br>";
      echo  $_SERVER['REQUEST_TIME'];
      echo "<br>";
      echo "<br>"; 
      ?>

    