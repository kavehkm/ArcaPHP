<?php
// use of func_get_args()
function sum()
{
    // get all arguments that passed into sum function
    $numbers = func_get_args();
    // loop through $numbers array and calc sum
    $total = 0;
    for ($i=0; $i < count($numbers); $i++) { 
        $total += $numbers[$i];
    }
    return $total;
}

echo sum(1, 2, 3) . '<br>';
echo sum(1, 2, 3, 4, 5, 6) . '<br>';


// use of ...
function sum2(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo sum2(10, 20, 30) . '<br>';
echo sum2(40, 50, 60, 70, 80);