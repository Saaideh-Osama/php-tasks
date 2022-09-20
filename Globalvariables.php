<?php 
$n2= 75;
$n1 = 25; 

function multiply() {
$GLOBALS['res'] = $GLOBALS['n1'] * $GLOBALS['n2'];
}

multiply();
echo $res;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo $_SERVER['PHP_SELF'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


?>
