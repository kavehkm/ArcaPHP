<?php
// example of open file in php
$filename = 'readme.txt';

// check file exists
if (!file_exists($filename)) {
    die("The file $filename does not exists.");
}

// open file
$fh = fopen($filename, 'rt');
if ($fh) {
    echo 'The file ' . $filename . ' is open';
    // close file after process
    fclose($fh);
} else {
    die('Something went wrong.');
}