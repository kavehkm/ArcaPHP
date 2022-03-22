<?php
$source = 'readme.txt';
$dest = 'readme.bak.txt';


// check for source file exists
if (!file_exists($source)) {
    die("File $source does not exists");
}

// copy from source into dest
$result = copy($source, $dest);

// check result
if ($result) {
    echo "Copy $source into $dest Done.<br>";
} else {
    echo "Cannot copy $source into $dest.<br>";
}