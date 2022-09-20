<?php
$cookie_name = 'user';
$cookie_value = 'Alex Porter';

function showdelete($cookie,$cookievalue){
    setcookie($cookie,$cookievalue);
echo "cookie name is ".$_COOKIE[$cookie] ;
}
echo  showdelete($cookie_name,$cookie_value);
?>