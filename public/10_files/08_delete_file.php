<?php
// delete a file in php
$filename = 'readme.bak.txt';

// check for exists
if (!file_exists($filename)) {
    die("File $filename does not exists");
}

// delete file
$result = unlink($filename);

// check for result
if ($result) {
    echo "File $filename deleted <br>";
} else {
    echo "Cannot Delete $filename <br>";
}