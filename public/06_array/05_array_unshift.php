<?php
// define permissions array to hold all permissions
$permissisons = [
    'edit',
    'delete',
    'view'
];
// add new permission at start of array
array_unshift($permissisons, 'new');

// display array changes by print_r
print_r($permissisons);
echo '<br>';


// add several permission at start of array
$permissisons = [
    'edit',
    'delete',
    'view'
];
array_unshift($permissisons, 'new', 'approve', 'reject');
// display array changes
print_r($permissisons);
echo '<br>';


// prepending an element to the beginning of an associative array
$colors = [
    'red' => '#ff000',
    'green' => '#00ff00',
    'blue' => '#000ff'
];

$colors = ['black' => '#000000'] + $colors;

print_r($colors);
echo '<br>';