<?php 

// EXERCISE 9 

$a = array( 0, 1, 2, 3, 4, 5, 6 );

$result = array_sum($a);

$result =  0;

for ($i = 0; $i < count($a); $i ++) {
    $result = $result + $a[$i];
}

foreach ($a as $i=>$val) {
    $result = $result + $val;
}

$result = array_reduce($a, function ($carry, $item) {
    $carry += $item;
    return $carry;
});

dd($result);