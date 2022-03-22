<?php
// write some contents to file in php
$numbers = [1, 2, 3, 4, 5, 6];

// file path
$filename = 'numbers.txt';

// open file in write mode
$fh = fopen($filename, 'w');

// check for file handler
if (!$fh) {
    die("Cannot open file $filename");
}

// write numbers to file
foreach ($numbers as $number) {
    fputs($fh, $number);
}

// close file
fclose($fh);