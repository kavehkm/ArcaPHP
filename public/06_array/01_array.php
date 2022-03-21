<?php
// empty array
$empty_array = array();
$empty_array2 = [];


// array with initial members
$array1 = array(1, 2, 3, 4);
$array2 = ['kaveh', 'amin', 100, 666];


// display arrays by var_dump and print_r
var_dump($empty_array);
echo '<br>';
var_dump($array1);
echo '<br>';
print_r($array2);
echo '<br>';


// access to array elements
echo 'first element of array1 is: ' . $array1[0] . '<br>';
echo 'third element of array2 is: ' . $array2[2] . '<br>';


// change array element by index
$array1[0] = 666;
echo 'first element of array1 after change is: ' . $array1[0] . '<br>';


// add new element at the end of array
$empty_array[] = 'new element';
$empty_array2[] = 10.1;


// remove element from an array
unset($array1[2]);
unset($array2[1]);


// remove element from an array by reorder index
array_splice($array1, 1, 1);
array_splice($array2, 1, 1);


// get size of an array
echo 'size of array1 is: ' . count($array1) . '<br>';
echo 'size of array2 is: ' . count($array2);