<?php
// use of trim functions in PHP: <tring>, rtrim> and <ltrim
$string = '***Hello world***';

// trim
$trim_string = trim($string, '*');

// rtrim
$rtrim_string = rtrim($string, '*');

// ltrim
$ltrim_string = ltrim($string, '*');


echo "original string: $string<br>";
echo "after trim: $trim_string<br>";
echo "after rtrim: $rtrim_string<br>";
echo "after ltrim: $ltrim_string<br>";