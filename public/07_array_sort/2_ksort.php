<?php
// define an associative array for ksort operation
$employees = [
    'john' => [
        'age' => 24,
        'title' => 'Front-end Developer'
    ],
    'alice' => [
        'age' => 28,
        'title' => 'Web Designer'
    ],
    'bob' => [
        'age' => 25,
        'title' => 'MySQL DBA'
    ]
];
// display array before ksort
echo 'before ksort:' . '<br>';
print_r($employees);
echo '<br>';

// ksort array
ksort($employees);
// display array after ksort
echo 'after ksort:' . '<br>';
print_r($employees);
echo '<br>';


// krsort array
krsort($employees);
// display array after krsort
echo 'after krsort:' . '<br>';
print_r($employees);
echo '<br>';