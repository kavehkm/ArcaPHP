<?php
// define numbers array to test with array_filter
$numbers = [1, 2, 3, 4, 5];

// filter odd numbers
$odd_numbers = array_filter($numbers, fn ($number) => $number % 2 == 1);

// display result
echo 'odd numbers:' . '<br>';
print_r($odd_numbers);