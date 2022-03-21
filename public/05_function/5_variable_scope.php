<?php
// local variable: defined in function
function say()
{
    $message = 'Hi';
    echo $message . '<br>';
}
say();


// global vs local scopes
$message = 'Hello';
function say2()
{
    $message = 'Hi';
    echo $message . '<br>';
}
say2();
echo $message . '<br>';


// access to global scope from whithin local scope
$message = 'Hello';
function say3()
{
    global $message;
    echo $message . '<br>';
}
say3();


// static variables
function get_counter()
{
    static $counter = 1;
    return $counter++;
}
echo get_counter() . '<br>';
echo get_counter() . '<br>';
echo get_counter() . '<br>';
