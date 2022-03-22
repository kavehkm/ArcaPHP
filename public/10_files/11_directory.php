<?php
// working with directory in php
$directory_path = __DIR__;
// check for exists
if (!is_dir($directory_path)) {
    die("Directory $directory_path does not exists");
}
// open directory
$dh = opendir($directory_path);
// move through directory and print entries
while ($e = readdir($dh)) {
    if ($e !== '.' && $e !== '..') {
        echo $e . '<br>';
    }
}
// close directory
closedir($dh);


// create a directory in php
$directory = $directory_path . '/' . 'newdir';
$result = mkdir($directory, 0770);
// check result
if ($result) {
    echo "Directory $directory created successfully <br>";
} else {
    echo "Cannot create $directory <br>";
}


// remove directory in php
$result = rmdir($directory);
if ($result) {
    echo "Directory $directory removed successfully<br>";
} else {
    echo "Cannot remove $directory <br>";
}