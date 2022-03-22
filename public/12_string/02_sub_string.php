<?php
// substring with offset and default length
$string = 'PHP awsome';
$offset = 4;
$result = substr($string, $offset);
echo "$string substring with offset of $offset is: " . $result . '<br>';


// substring with offset and custom length
$offset = 0;
$length = 3;
$result = substr($string, $offset, $length);
echo "$string substring with offset of $offset and length of $length is: " . $result . '<br>';