<?php
function primeCheck($number){
	if ($number == 1)
	return 0;
	
	for ($i = 2; $i <= sqrt($number); $i++){
		if ($number % $i == 0)
			return 0;
	}
	return 1;
}

$number = 4;
$flag = primeCheck($number);
if ($flag == 1)
	echo "Prime";
else
	echo "Not Prime";
// -----------------------------------------------------
;
echo "<br>";
function reversed($word){
  return  strrev($word); 
}

echo reversed("safe");
// -------------------------------------------
echo "<br>" ;

function checklower($sent){
    $sentlower = strtolower($sent);
    if ($sent=== $sentlower){
        return "your string is all lowercase " ;
   }
    else{
        return "your string have upper case letter(s)";
    }
}

echo checklower("houSe");

echo "<br>" ;

// ------------------------------------------



 
// Swap Logic


function swap($a,$b){echo "\nThe number before swapping is:\n";
echo "Number a =".$a." and b=".$b;
$temp = $a;
$a = $b;
$b = $temp;
echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b."\n";
}
echo swap(15,27);


echo "<br>" ;

// ------------------------------------------


function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
    if ($number == $sum)
        return 1;
    return 0;   
}
$number = 153;
$flag = armstrongCheck($number);
if ($flag == 1){
    echo "Yes";}
else{
    echo "No";}

echo "<br>" ;

// -----------------------------------------------------
echo '<br>';

function palindrome($string) {
$result = str_replace(array("#", "'", ";" ,'/' , '\\' ,':' , '+'), '', $string);


  if ($result == strrev($result)){
      echo'yes it is a palindrom' ;
  }
  else{
	   echo'no it is not a palindrom' ;
  }
}
palindrome('kakak');
// function palindrom($inserted){
// //    $z= array("#", "'", ";" ,'/' , '\\' ,':' , '+');
// //     $text= str_replac((array("#", "'", ";" ,'/' , '\\' ,':' , '+'),"",$inserted);
// //     $revved = reversed($text);
// //     if ($text == $revved){
// //         return "this text is a palindrom text"
// //     ;} 
// // else {
// //     return "this is not a palindrom text" ;}
// //   }
  
// //   echo palindrom("ror");
  echo "<br>" ;


 
  function removeduplicate($a){

    print_r(array_unique($a));
  }
 echo removeduplicate(array("a"=>"red","b"=>"green","c"=>"red","d"=>"yellow"));


 echo "<br>" ;

// ---------------------------------------------------------------------------------------------------------------------------

 function year_check($my_year){ if ($my_year % 4 == 0) print("It is a leap year"); 
 else print("It is not a leap year"); }
 year_check("1900");
 echo "<br>" ;

// -----------------------------------------------------------

  function season($tem){
    if($tem >= 20){
        return "it is summertime"
    ;}
else {
    return "it is wintertime"
;}
  }
echo season(20);
echo "<br>" ;
// -----------------------------------------------------------
function summation($n1,$n2){
    $sum=$n1+$n2;
    $dup=($n1+$n2)*3;
if ($n1 != $n2){
    return $sum
;}
 else {
  return $dup
 ;}
}
echo summation(3,3);
echo "<br>" ;
// -----------------------------------------------------------
function check30($num1,$num2){
    $sum=$num1+$num2;
    if ($num1+$num2==30){
return $sum
    ;}
    else {
        return "false"
    ;}
;};
echo check30(12,18);
echo "<br>" ;
// -----------------------------------------------------------
function mult3($example){
    if($example%3==0){
        return "true"
    ;}
    else{ return "false"
;};};
echo mult3(55);
echo "<br>" ;
// -----------------------------------------------------------
 
function checkrange($number){
    if ($number>=20 && $number<=50){
        return "true"
   ; }
   else{return "false";}
;}

echo checkrange(24);
echo "<br>" ;

// -----------------------------------------------------------
function biggestnum($ar){
if ( $ar[0]>$ar[1] && $ar[0]>$ar[2]){
return $ar[0];
}
else if($ar[1]>$ar[0] && $ar[1]>$ar[2]) {
    return $ar[1]
;}
else {
    return $ar[2]
;}
}
echo biggestnum(array(1,5,9));
echo "<br>" ;
// -----------------------------------------------------------
function unitprocessor($units){
if ($units<=50){
  return  $units*2.5 
;} 
else if($units>50 && $units<=150){
   return ($units-50)*5 + (50*2.5)
;}
else if($units>150 && $units<=250){
   return ($units-150)*6.2 + (50*2.5) + (100*5)
;}
 else { return ($units-250)*7.5 + (50*2.5) + (100*5) + (100*6.2);}
};
echo unitprocessor(70);
echo "<br>" ;
// -----------------------------------------------------------

function calc($operator,$number1,$number2){
if ($operator=="+"){ 
   echo $number1+$number2   
;}
else if($operator=="/"){
  echo  $number1/$number2   
;}
else if($operator=="*"){
  echo  $number1*$number2   
;}
else {
   echo $number1-$number2   
;}}
calc("*",6,4);
echo "<br>" ;
// -----------------------------------------------------------
function vote($age){
if ($age<18){
    echo "this person is not eligible for voting "
;}
else{ echo "this person is eligible for voting";}
;}
vote(15);
echo "<br>" ;
// -----------------------------------------------------------
function checknum($check){
    if($check<0){
        echo "this number is negative"
    ;}
    else { echo "this number is positive";}
;};
checknum(-99);
echo "<br>" ;
// -----------------------------------------------------------

function grades($avg){
$summation=0;
foreach ($avg as $value) {
 $summation+=$value ;
}
$average=$summation/count($avg);
    if ($average<100 &&$average>=90){
        return "A"
    ;}
    elseif ($average<90 &&$average>=80){
        return "B"
    ;}
elseif ($average<80 &&$average>=70){
  return  "C"
;}
elseif($average<70 &&$average>=60){
    return "D"
;}
else{
    return "F"
;};}
echo grades(array(60,40,60,75,70,64));
echo "<br>" ;

// -----------------------------------------------------------

// $my_string = 'The quick@brown/fox-jumps over the lazy dog';
// $str = "My name is  hello and email hello.world598@gmail.com;";
// // 
// $res = replace('/[0-9\@\.\;\""]+/', ' ', $str);

// echo implode('', array_slice(explode(' ', $my_string),0, 5));


function RemoveSpecialChar($st){

 $res = preg_replace('/[0-9\@\.\;\""\-\/]+/', ' ', $st);

$str2=explode(' ',$res);

for ($i=0;$i<5;$i++){
echo $str2[$i]." ";
}}
echo RemoveSpecialChar('The quick@brown/fox-jumps over the lazy dog');
?>
