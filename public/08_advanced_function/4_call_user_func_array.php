<?php
// example of call_user_func_array function in php
function add(int $a, int $b) {
    return $a + $b;
}

// call user defined function by name and pass arguments by array
$result = call_user_func_array('add', [10, 21]);

// display result
echo $result . '<br>';