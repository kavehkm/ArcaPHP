<?php
// replace
$str = 'Hello there';
$old = 'Hello';
$new = 'Hi';
$replaced_str = str_replace($old, $new, $str);
// show result
echo "result is $replaced_str after replace $old with $new in $str<br>";


// case in-sensitive replacements
$string = "Hello Hello world Hello there";
$old = 'hello';
$new = 'Hi';
$replaced_string = str_ireplace($old, $new, $string, $count);
// display result
echo "before replace: $string<br>";
echo "after replace: $replaced_string<br>";
echo "replacement occur $count times<br>";