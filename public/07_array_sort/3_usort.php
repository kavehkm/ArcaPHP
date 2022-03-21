<?php
// define normal array to target by usort
$numbers = [2, 1, 3];
// display array before usort
echo 'before usort:' . '<br>';
print_r($numbers);
echo '<br>';

// usort the array
usort($numbers, function ($x, $y) {
    if ($x === $y) {
        return 0;
    }
    return $x > $y ? 1 : -1;
});
// display array after usort
echo 'after usort:' . '<br>';
print_r($numbers);
echo '<br>';



// repeat above usort with <=> spaceship operator for ease
$numbers = [2, 1, 3];
// display array before usort
echo 'before usort:' . '<br>';
print_r($numbers);
echo '<br>';

// usort the array with <=>
usort($numbers, function ($x, $y) {
    return $x <=> $y;
});
// display array after usort
echo 'after usort:' . '<br>';
print_r($numbers);
echo '<br>';



// use usort to sort an array of string base on string-length
$names = ['kaveh', 'amin', 'kaven', 'atoosa', 'darya'];
// display array before usort
echo 'before usort:' . '<br>';
print_r($names);
echo '<br>';

// usort the names array base on string-length
usort($names, function ($first, $second) {
    return strlen($first) <=> strlen($second);
});
// display arraye after usort
echo 'after usort:' . '<br>';
print_r($names);
echo '<br>';