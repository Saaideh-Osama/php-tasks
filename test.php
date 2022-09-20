<?php

echo strtoupper("Hello WORLD!");echo "<br>" ;
echo strtolower("Hello WORLD!");
echo "<br>" ;
echo ucfirst("hello world!");
echo "<br>" ;
echo lcfirst("Hello world!");
echo "<br>" ;
$input = '06/10/2011 19:00:02';
echo "<br>" ;
$date = strtotime($input);
echo date('d/M/Y h:i:s', $date);
echo "<br>" ;
$word = "fox";
$mystring = "The quick brown fox jumps over the lazy dog";
 
// Test if string contains the word 
if(strpos($mystring, $word) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}
echo "<br>" ;

$url = 'http://www.example.com/image.jpg?q=6574&t=987';

// parsed path
$path = parse_url($url, PHP_URL_PATH);

// extracted basename
echo basename($path);

echo "<br>" ;


$email  = 'priyank@geeks.com';
  
  // Get the username by slicing string
  $username = strstr($email, '@', true);
  
  // Display the username
  echo $username."\n";

  echo "<br>" ;

  $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $shfl = str_shuffle($comb);
  $pwd = substr($shfl,0,8);
  echo $pwd;

  echo "<br>" ;
  $str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n";


echo "<br>" ;
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");


echo "<br>" ;


$array = array("one","two","three");
$array2 = array("test","test2");

foreach ($array as $value) {
    if ($value === 'one') {
       array_push($array2, $value);
    }
}

var_dump($array2);

echo "<br>" ;


$ch = 'x';
$next_ch = ++$ch; 
if (strlen($next_ch) > 1) { // if you go beyond z or Z reset to a or A
 $next_ch = $next_ch[0];
}
 echo $ch;
echo "<br>" ;

$string = 'I am happy today.';
$replacement = ' very ';

echo substr_replace($string, $replacement, 4, 0);

echo "<br>" ;


$str = "00775505";
  

$str = ltrim($str, "0"); 
          

echo $str;
 
echo "<br>" ;

$sub_string = 'rayy@';
$str = 'rayy@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";

echo "<br>" ;

$my_str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($my_str, '-')."\n";

echo "<br>" ;

function RemoveSpecialChar($str)
{
    $res = preg_replace('/[0-9\@\.\;\""]+/', '', $str);
    return $res;
}
$str = "My name is  hello and email hello.world598@gmail.com;";
$str1 = RemoveSpecialChar($str);
echo "My UpdatedString: ", $str1;

 echo "<br>" ;

 $value = "Test me more";
 echo strtok($value, " ");
echo "<br>" ;

?>