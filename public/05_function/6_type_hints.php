<?php
// params type hint
function add(int $a, int $b)
{
    return $a + $b;
}
echo add(1, 2) . '<br>';


// returned value type hint
function add2(int $a, int $b) : int
{
    return $a + $b;
}
echo add2(1, 10) . '<br>';


// void returned value
function welcome(string $username) : void
{
    echo 'Welcome' . ' ' . $username . '<br>';
}
welcome('kaveh');