<?php

// EXERCISE 1
$a = array( 0, 1, 2, 3, 4 );

$result = array_search(3, $a);

$result = $a[3];

foreach ($a as $i) {
    if ($i === 3) {
        dd($i);
    }
}

if (in_array(3, $a)) {
    dd(3);
}

$result = array_values($a)[3];

$result = array_filter($a, function ($i) {
    return $i === 3;
});

dd($result);