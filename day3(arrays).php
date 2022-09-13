<?php
$colors=array("red","green","white");
 echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet,
 the $colors[1] lawn, the white $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" ;
 echo "<br>";
//  ----------------------------------------------------------------------------------------


echo "<ul>";

foreach(array("green", "red", "blue") as $string) {
    echo "<li>".$string."</li>"
;}
echo "<ul>";
echo "<br>";
//  ----------------------------------------------------------------------------------------

$cities = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
asort($cities);

foreach($cities as $x => $x_value) {
  echo "the capital of " . $x . ", is " . $x_value;
  echo "<br>";}
  echo "<br>";
//  ----------------------------------------------------------------------------------------
	$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
echo "<br>";

//  ----------------------------------------------------------------------------------------


$original = array( 'a', 'b', 'c', 'd', 'e' );
$inserted = array( 'x' );  
 
array_splice( $original, 3, 0, $inserted );
print_r($original) ;
echo "<br>";
//  ----------------------------------------------------------------------------------------

$fruits = array();
$age = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($age);

foreach($age as $x => $x_value) {
  echo  "$x = " . $x_value;
  echo "<br>";
}
//  ----------------------------------------------------------------------------------------

$numbers = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
sort($numbers);

$avg = array_sum($numbers)/count($numbers);
echo "average temperature is :$avg";
echo "<br>";
for($x = 0; $x < 5; $x++) {
  echo " $numbers[$x] ";
} 
echo "<br>";
for($x = count($numbers)-5; $x <count($numbers) ; $x++) {
  echo " $numbers[$x] ";
}


echo "<br>";


//  ----------------------------------------------------------------------------------------

$array1 = array("color"=>"red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

echo "<br>";
//  ----------------------------------------------------------------------------------------
$arr = array("red","blue","white","yellow");
$text= implode(" ",$arr);

$TEXTS =strtoupper($text);

print_r (explode(" ",$TEXTS));


echo "<br>";
//  ----------------------------------------------------------------------------------------

$ar = array("RED","BLUE", "WHITE","YELLOW");
$stringg= implode(" ",$ar);

$stringgS =strtolower($stringg);

print_r (explode(" ",$stringgS));

echo "<br>";
//  ----------------------------------------------------------------------------------------

$ints=array(200,201,202,203,204,205,206,207,208,209,
210,211,212,213,214,215,216,217,218,219,
220,221,222,223,224,225,226,227,228,229,
230,231,232,233,234,235,236,237,238,239,
240,241,242,243,244,245,246,247,248,249,
250);
$multi4=array();
foreach ($ints as $value) {
    if ($value % 4==0) {
        array_push($multi4,$value)
   ; };
}
print_r($multi4) ;
echo "<br>";
//  ----------------------------------------------------------------------------------------
$words =  array("abcd","abc","de","hjjj","g","wer");
usort($words, function($a, $b){
   return strlen($a) < strlen($b);
});

var_export($words);

echo "<br>";
//  ----------------------------------------------------------------------------------------
function randnum(){
    $MT=array();
    for($x=0;$x<100;$x++){
        array_push($MT, rand(11, 20));
;}  print_r(array_unique($MT)) ;}
echo randnum();
echo "<br>";

//  ----------------------------------------------------------------------------------------
function sortit($arrr){
sort($arrr);
$clength = count($arrr);
for($x = 0; $x < 2; $x++) {
    if ($arrr[0]==0){ return
$arrr[1];}
    else { return $arrr[0] ;};}
}

echo sortit(array(2, -1, 10, 12, 6));
echo "<br>";
?>









 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 