<?php

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);

echo '<br>';

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);
echo '<br>';echo '<br>';
var_dump($array["foo"]);echo '<br>';echo '<br>';echo '<br>';
var_dump($array[42]);echo '<br>';echo '<br>';echo '<br>';
var_dump($array["multi"]["dimensional"]["array"]);
?>