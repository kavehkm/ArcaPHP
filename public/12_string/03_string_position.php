<?php
// case sensitive search
$string = 'To do or not to do';
$need = 'To';
$need_position = strpos($string, $need);
if ($need_position === false) {
    echo "Cannot find $need in $string<br>";
} else {
    echo "Start position of $need in $string is: $need_position<br>";
}


// case in-sensitive search
$string = 'PHP is cool';
$need = 'php';
$need_position = strpos($string, 'php');

if ($need_position === false) {
    echo "Cannot find $need in $string<br>";
} else {
    echo "Start position of $need in $string is: $need_position<br>";
}

$need_position = stripos($string, 'php');
if ($need_position === false) {
    echo "Cannot find $need in $string<br>";
} else {
    echo "Start position of $need in $string is: $need_position<br>";
}