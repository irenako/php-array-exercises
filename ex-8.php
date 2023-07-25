<?php 

// EXERCISE 8
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);


foreach ($transactions as &$i) {
    $i['amount'] = abs($i['debit'] - $i['credit']);
}

$result = array();

$result = array_map(function($transaction) {
    $transaction['amount'] = abs($transaction['debit'] - $transaction['credit']);
    return $transaction;
}, $transactions);

array_walk($transactions, function (&$transaction) {
    $transaction['amount'] = abs($transaction['debit'] - $transaction['credit']);
});

dd($transactions);