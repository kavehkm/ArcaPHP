<?php
// function with 2 parameters
function concat($str1, $str2)
{
    return $str1 . $str2;
}

$greeting = concat('Welcome', ' Admin');
echo $greeting . '<br>';


// pass by value
$counter = 1;
function increase($value)
{
    $value += 1;
    echo '[inside increase function] counter value is: ' . $value . '<br>';
}
increase($counter);
echo 'counter value is: ' . $counter . '<br>';


// pass by reference
$counter = 1;
function increase2(&$value)
{
    $value += 1;
    echo '[inside increase2 function] counter value is: ' . $value . '<br>';
}
increase2($counter);
echo 'counter value is: ' . $counter . '<br>';