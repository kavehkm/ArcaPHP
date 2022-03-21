<?php
// declare strict model on top of current file
declare(strict_types=1);


function add(int $x, int $y)
{
    return $x + $y;
}

// Fata error: Uncaught TypeError
// echo add(1.5, 2.5) . '<br>';

echo add(3, 2) . '<br>';