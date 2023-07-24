<?php 

// EXERCISE 2
$a = array("zero" => 0, "one" => 1, "two" => 2, "three" => 3, "four" => 4);

$result = array_search(3, $a);

$result = array_keys($a);
dd($result[3]);


$result = $a['three'];

foreach ($a as $i => $val) {
    if ($val === 3) {
        $result = [$i => $val];
    }
}

$result = array_filter($a, function($val) {
    return $val === 3;
});

dd($result);