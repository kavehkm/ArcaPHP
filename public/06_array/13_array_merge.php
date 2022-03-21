<?php
// first array
$server_side = ['PHP'];

// second array
$client_side = ['JavaScript', 'CSS', 'HTML'];

// merged array
$full_stack = array_merge($server_side, $client_side);

// display merged array
print_r($full_stack);
echo '<br>';


// update old value with new one through merge process
$before = [
    'php' => 2,
    'js' => 4,
    'html' => 4,
    'css' => 3
];

$after = [
    'php' => 5,
    'js' => 5,
    'mysql' => 4
];

$skills = array_merge($before, $after);

print_r($skills);
echo '<br>';