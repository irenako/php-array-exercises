<?php 

// EXERCISE 6
$a = "a,b,c,d,e,f";

$b = str_getcsv($a);

$result = array_combine($b, $b);

$result = array();

foreach ($b as $i => $val) {
    $result[$val] = $val;
}

$result = array_map(function($i) {
    return [$i => $i];
}, $b);

$result = call_user_func_array('array_merge', $result);

dd($result);