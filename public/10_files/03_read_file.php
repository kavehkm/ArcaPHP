<?php

// read from file in php
$filename = 'readme.txt';

// check for exists
if (!file_exists($filename)) {
    die("File $filename does not exists.");
}

// open file
$fh = fopen($filename, 'rt');

if ($fh) {
    // read whole contents of file
    $contents = fread($fh, filesize($filename));
    echo "Contents of file is:<br>";
    echo nl2br($contents) . '<br>';
    // close file
    fclose($fh);
} else {
    echo "Cannot open file $filename<br>";
}


// read file line by line in php
$lines = [];
$fh = fopen($filename, 'rt');
if ($fh) {
    while (!feof($fh)) {
        $lines[] = fgets($fh);
    }
    fclose($fh);
} else {
    echo "Cannot open file $filename<br>";
}
// display lines
print_r($lines);