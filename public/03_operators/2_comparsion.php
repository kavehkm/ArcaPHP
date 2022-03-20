<?php
// define some variable to comparsion
$x = 10;
$y = 10;
$z = 20;

// equal
echo "$x == $y ";
var_dump($x == $y);
echo '<br>';

echo "$x == $z ";
var_dump($x == $z);
echo '<br>';

echo "$x == '10' ";
var_dump($x == '10');
echo '<br>';

// not equal
echo "$x != $y ";
var_dump($x != $y);
echo '<br>';

// identical
echo "$x === '10' ";
var_dump($x === '10');
echo '<br>';

// not identical
echo "$x !== '10' ";
var_dump($x !== '10');
echo '<br>';

// greater than
echo "$x > $y ";
var_dump($x > $y);
echo '<br>';

// greater than or equal
echo "$x >= $y ";
var_dump($x >= $y);
echo '<br>';

// less than
echo "$x < $z ";
var_dump($x < $z);
echo '<br>';

// less than or equal
echo "$x <= $z ";
var_dump($x <= $z);
echo '<br>';
