<?php
$oldfile = 'phplogo.svg';
$newfile = 'php_logo.svg';

// check for exists
if (!file_exists($oldfile)) {
    die("File $oldfile does not exists");
}

// rename file
$result = rename($oldfile, $newfile);

// check for result
if ($result) {
    echo "File $old file renamed to $newfile<br>";
} else {
    echo "Cannot rename $old file <br>";
}

// revert changes of futur use
rename($newfile, $oldfile);