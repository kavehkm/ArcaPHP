<?php
// general sytax for assignment
$variable_name = 'variable_value';

// multiple assignments
$x = $y = 20;

// echo
echo "variable_name: $variable_name <br>";
echo "x is: $x and y is: $y <br>";


// arithmetic assignments
$counter = 100;
$counter += 1;
echo 'counter += 1 is: ' . $counter . '<br>';

$counter -= 1;
echo 'counter -= 1 is: ' . $counter . '<br>';

$counter *= 2;
echo 'counter *= 2 is: ' . $counter . '<br>';

$counter /= 2;
echo 'counter /= 2 is: ' . $counter . '<br>';

$counter %= 6;
echo 'counter %= 6 is: ' . $counter . '<br>';

$counter **= 6;
echo 'counter **= 6 is: ' . $counter . '<br>';


// cancat assignment
$name = 'kaveh';
$name .= ' mehrbanian';
echo $name;
