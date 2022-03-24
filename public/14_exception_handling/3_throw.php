<?php
// produce exceptions


function divide($x, $y)
{
    // check for numeric values
    if (!is_numeric($x) || !is_numeric($y)) {
        $msg = 'Both arguments must be number or numeric strings';
        throw new InvalidArgumentException($msg);
    }

    // check for y value
    if ($y == 0) {
        throw new Exception('Division by zero, y cannot be zero');
    }

    // everything is ok divide and return result
    return $x / $y;
}


try {
    divide(10, 0);
} catch (Exception $ex) {
    echo $ex->getMessage() . '<br>';
}