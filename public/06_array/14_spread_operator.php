<?php

// user spread operator to merge arrays
$numbers = [4, 5];
$scores = [1, 2, 3, ...$numbers];

// display result
print_r($scores);
echo '<br>';


// another exmple of merge
$even = [2, 4, 6];
$odd = [1, 3, 5];
$all = [...$odd, ...$even];

// display result
print_r($all);
echo '<br>';


// use spread operator with function to unpack arguments
function format_name($first, $middle, $last)
{
    return $middle ? "$first $middle $last" : "$first $last";
}

$names = [
    'first' => 'john',
    'middle' => 'V. ',
    'last' => 'Doe'
];

echo format_name(...$names) . '<br>';
