<?php 

// EXERCISE 3
$a = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);

$result = $a[1][1][0];

foreach($a as $i) {
    foreach ($i as $b) {
       if (is_array($b) && in_array(3, $b)) {
           $result = $b[0];
       }
    }
}

array_walk_recursive($a, function($val){
    if ($val === 3) {
        dd($val);
    }
});

dd($result);