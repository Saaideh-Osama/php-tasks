<?php
 for ($x=1;$x<11;$x++){
if ($x==1){
    echo $x
;}
else { echo "-$x";}
; }
echo "<br>";
// -------------------------------------------
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo  $sum;

echo "<br>";
// -------------------------------------------
// for ($i=5;$i>=0;$i--){
// for ($j=0;$j<=$i;$j++){

//   echo "A"; 
// ;}echo "bb";
// echo "<br>";}
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
 for($j=5; $j>$i; $j--){  
 echo $alpha[$i];  
    }  
 echo "<br>";  
}









echo "<br>";
// -------------------------------------------











echo "<br>";
// -------------------------------------------


$num = 5;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo  $factorial;  

echo "<br>";
// -------------------------------------------



echo "<br>";
// -------------------------------------------
$count=0;
$stringg="this is so strange to see";
$para=strtolower($stringg);
for ($i=0;$i<strlen($stringg);$i++){
if ($para[$i]=="s"){
  $count++;}
}
echo $count;




echo "<br>";
echo "<br>";
// -------------------------------------------

$f1 = 0;  //first number
    $f2 = 1; // second number
    $n = 10; //total Fibonacci series number count.
    echo $f1;
    echo '<br/>';
    echo $f2;
    echo '<br/>';
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo $f3 ."<br />"; 
    }

    echo "<br>";
    // -------------------------------------------
    echo "<table border ='1' style='border-collapse: collapse'>";
    for($i=1;$i<=6;$i++)
    {
    echo "<tr>";
    for ($j=1;$j<=5;$j++)
      {
      echo "<td>$i * $j = ".$i*$j."</td>";
      }
      echo "</tr>";
      }
            echo "</table>";


            echo "<br>";
            // -------------------------------------------
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo " FizzBuzz"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo " Fizz"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo " Buzz"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }
 echo "<br>";
 // -------------------------------------------
 // Function to display Floyd's Triangle
function FloydsTriangle($n)
{
    $value = 1;

    // loop for number of lines
    for($i = 1; $i <= $n; $i++)
    {
        // loop for number of elements
        // in each line
        for($j = 1; $j <= $i; $j++)
        {
            print($value." ");
            $value++;
        }
      echo("<br>");
    ;}
;}
$n = 6;
FloydsTriangle($n);


echo "<br>";
// -------------------------------------------

for ($i=0; $i < 5; $i++) { 
  for ($j=4; $j >=0; $j--) { 
      if ($j <= $i) {
          echo  chr(ord('A')+$i)." ";
      }else{
          echo "A"." ";
      }
  }
  echo "<br>";
}
echo "<br>";
// -------------------------------------------

for ($i=0; $i < 5; $i++) { 
  for ($j=4; $j >=0; $j--) { 
      if ($j <= $i) {
          echo  (1+$i)." ";
      }else{
          echo "1"." ";
      }
  }
  echo "<br>";
}

echo "<br>";
// -------------------------------------------
for($i=1;$i<6;$i++){
  for($j=1;$j<6;$j++){
      if($i==$j){
          echo $j." ";
      }
      else{
          echo "0"." ";
      }

  }
  echo "<br>";
}