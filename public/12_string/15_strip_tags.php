<?php
// remove all HTML and PHP tags from a string
$string = file_get_contents('https://php.net');
// remove tags
$plain_text = strip_tags($string);
// display result
echo $plain_text;