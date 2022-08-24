<?php

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third");

$values = array(
    "field1value"=>"apple",
    "field2value"=>"orange",
    "field3value"=>"graphes");

$newArray = array_combine($keys,$values);
print_r($newArray);

?>