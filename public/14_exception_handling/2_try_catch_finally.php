<?php
// demonstrate exception handling in PHP +finally

$filename = 'data.txt';
$contents = null;

try {
    // open file
    $fh = fopen($filename, 'r');
    // read contents
    $contents = fread($fh, filesize($filename));
} catch (Exception $ex) {
    // display error message to user
    echo $ex->getMessage() . '<br>';
} finally {
    // success or failure does not matter, close file
    if ($fh) {
        fclose($fh);
    }
}