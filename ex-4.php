<?php

// EXERCISE 4
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);

$result = $a['b']['o']['b'];

foreach ($a as $i => $val) {
    foreach ($val as $b => $val2) {
        if (is_array($val2) && in_array(3, $val2)) {
            $result = $val2['b'];
        };
    }
}

dd($result);