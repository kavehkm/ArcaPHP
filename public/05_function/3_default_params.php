<?php
// define function with default value
function concat($str1, $str2, $delimiter = ' ')
{
    return $str1 . $delimiter . $str2;
}
$message = concat('Hi', 'there!');
echo $message . '<br>';

$message = concat('Hi', 'there!', ' , ');
echo $message . '<br>';