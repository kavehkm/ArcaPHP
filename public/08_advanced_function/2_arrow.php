<?php
// define simple arrow function in php
$eq = fn ($x, $y) => $x === $y;
// use as normal function
echo $eq(100, 100);


// pass arrow function to another function as callback
$list = [10, 20, 30];
// use eq for mapping
$result = array_map(fn ($x) => $x * 2, $list);
// display result before and after
echo 'before mapping:' . '<br>';
print_r($list);
echo '<br>';
echo 'after mapping:' . '<br>';
print_r($result);
echo '<br>';