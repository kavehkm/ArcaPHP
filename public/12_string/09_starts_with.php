<?php
// str_starts_with only available in PHP 8.0.0
if (!function_exists('str_starts_with')) {
    function str_starts_with($haystack, $needle) {
        return (string)$needle !== '' && strncmp($haystack, $needle, strlen($needle)) === 0;
    }
}

// check string1 start with string2
$string1 = 'Hello world';
$string2 = 'Hello';

// check and display result
$result = str_starts_with($string1, $string2);
if ($result) {
    echo "$string1 starts with $string2<br>";
} else {
    echo "$string1 do not starts with $string2<br>";
}