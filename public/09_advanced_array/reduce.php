<?php
// define numbers array to test with array_reduce
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sum = array_reduce($numbers, function ($carry, $current) {
    return $carry + $current;
});

echo 'sum of numbers is: ' . $sum . '<br>';