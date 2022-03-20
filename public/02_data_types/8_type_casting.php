<?php
// float -> integer
echo (int)12.5 . '<br>';
echo (int)12.9 . '<br>';

// string -> integer
$message = 'Hi';
echo (int)$message . '<br>';

$amount = '100 USD';
echo (int)$amount . '<br>';

// null -> integer
$quantity = null;
echo (int)$quantity . '<br>';

// integer -> float
echo (float)100 . '<br>';

//  integer -> string
echo (string)100 . ' USD';