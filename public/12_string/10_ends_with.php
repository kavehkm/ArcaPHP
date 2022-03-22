<?php
// str_ends_with only available in PHP 8.0.0
if (!function_exists('str_ends_with')) {
    function str_ends_with($haystack, $needle) {
        return $needle !== '' ? substr($haystack, -strlen($needle)) === $needle : true;
    }
}

// check string1 start with string2
$string1 = 'Hello world';
$string2 = 'ld';

// check and display result
$result = str_ends_with($string1, $string2);
if ($result) {
    echo "$string1 ends with $string2<br>";
} else {
    echo "$string1 do not ends with $string2<br>";
}