<?php
// define assoc array to taget with asort
$mountains = [
    'K2' => 8611,
    'Lhostse' => 8516,
    'Mount Everest' => 8848,
    'Kangchenjunga' => 8586
];
// display array before asort
echo 'before asort:' . '<br>';
print_r($mountains);
echo '<br>';

// asort array
asort($mountains);
echo 'after asort:' . '<br>';
print_r($mountains);
echo '<br>';