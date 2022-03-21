<?php
// define a anonymouse function in php
$double_it = function ($number) {
    return $number * 2;
};


// use of defined anonymouse function
$list = [10, 20, 30];
$double_list = array_map($double_it, $list);
// display result before and afte mapping
echo 'before mapping: ' . '<br>';
print_r($list);
echo '<br>';
echo 'after mapping' . '<br>';
print_r($double_list);
echo '<br>';


// access to global scope variables from within anonymouse function
$message = 'Hi';
$say = function () {
    echo $message;
};
$say();

// fix access problem by `use` keyword
$say = function () use ($message) {
    echo $message;
};
$say();
