<?php
$strings=["card","ab","thisisitasf","trap","z","wer"];
$shortest=strlen($arr[1]);
$longest=strlen($arr[0]);

for($i=1;$i<count($strings);$i++){

    if( strlen($strings[$i])<$shortest ) {
        $shortest = strlen($strings[$i]);
    }

    if(strlen($strings[$i])>$longest  ) {
        $longest =strlen($strings[$i]);
    }
}
echo "the The shortest string length is ". $shortest. "The longest string length is ".$longest;

?>