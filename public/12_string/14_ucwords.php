<?php
// convert first character of every word string into upper case
$string = 'hello world';
// convert
$ucwords_string = ucwords($string);
// display result
echo 'original string: ' . $string . '<br>';
echo 'after convert: ' . $ucwords_string . '<br>';