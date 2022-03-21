<?php
// normal numbers array
$numbers = [10, 20, 30];

// get all keys
$keys = array_keys($numbers);

// display keys
print_r($keys);
echo '<br>';


// get key for number -> 20
$keys = array_keys($numbers, 20);

// display keys
print_r($keys);
echo '<br>';


// assoc array
$user = [
    'username' => 'admin',
    'email' => 'admin@arca.net',
    'is_active' => '1'
];

// get all keys
$properties = array_keys($user);

// display keys
print_r($properties);
echo '<br>';

// get key for '1'
$properties = array_keys($user, 1);

// display keys
print_r($properties);
echo '<br>';


// get key for '1' identical
$properties = array_keys($user, 1, true);

// display keys
print_r($properties);
echo '<br>';
