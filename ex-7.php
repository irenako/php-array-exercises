<?php 

// Exercise 7 

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$result = array_combine($keys, $values);

$result = array();
foreach ($keys as $i => $val) {
    $result[$val] = $values[$i . 'value'];
}

$keys = array_flip($keys);
$result = array_map(function ($value) use ($values) {
    return $values[$value . 'value'];
}, $keys);

dd($result);