<?php
// define array numbers
$numbers = [1, 2, 3];

// add some new members at the end of numbers array
array_push($numbers, 4, 5);

// display changes
print_r($numbers);
echo '<br>';


// define numbers as associative array
$numbers = [
    'one' => 1,
    'two' => 2,
    'three' => 3
];

// add new key and value into array
$numbers['four'] = 4;

// display changes
print_r($numbers);