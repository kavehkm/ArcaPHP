<?php
// test file_exists, is_file, is_readable and is_writable
$filename = 'readme.txt';


if (file_exists($filename)) {
    echo "File $filename exists<br>";
} else {
    echo "File $filename does not exists<br>";
}

if (is_file($filename)) {
    echo "$filename is a file<br>";
} else {
    echo "$filename is not a file<br>";
}

if (is_readable($filename)) {
    echo "$filename is readable<br>";
} else {
    echo "$filename is not readable<br>";
}

if (is_writable($filename)) {
    echo "$filename is writable<br>";
} else {
    echo "$filename is not writable<br>";
}