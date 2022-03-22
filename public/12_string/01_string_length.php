<?php
// deal with normal ascii characters
$string = 'Hello world';
echo "len of $string is: " . strlen($string) . '<br>';


// deal with non-ascii characters
$string2 = 'سلام دنیا';
echo "len of $string2 is: " . mb_strlen($string2) . '<br>';