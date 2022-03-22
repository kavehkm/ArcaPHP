<?php
// write whole contents into file in one move
$filename = 'numbers.txt';

// check for exists
if (!file_exists($filename)) {
    die("File $filename does not exists");
}

// check for write permission
if (!is_writeable($filename)) {
    die("File $filename not writable");
}

// create and write contents into file
$numbers = [1, 2, 3, 4, 5, 6, 7];

// convert numbers to \n seperated text
$text_numbers = implode("\n", $numbers);

// write contents into file
file_put_contents($filename, $text_numbers);