<?php 

// EXERCISE 5
$a = "a,b,c,d,e,f";

$result = str_split(str_replace(',', '', $a), 1);

$result = explode( ',', $a);

$result = preg_split('/,/', $a, -1);

$result = array();

for ($i = 0; $i < strlen($a); $i++) {
    if($a[$i] != ',') {
        $result[] = $a[$i];
    }
}

$result = str_getcsv($a);

dd($result);