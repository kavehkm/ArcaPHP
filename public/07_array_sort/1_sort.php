<?php
// define array to sort
$numbers = [2, 1, 3];
// display array before sort
echo 'before sort:' . '<br>';
print_r($numbers);
echo '<br>';

// sort array
sort($numbers);
// display array after sort
echo 'after sort:' . '<br>';
print_r($numbers);
echo '<br>';


// sort array in reverse order
rsort($numbers);
// display array after reverse sort
echo 'after reverse sort:' . '<br>';
print_r($numbers);
echo '<br>';
