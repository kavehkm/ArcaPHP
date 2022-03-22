<?php
// read whole content of file in one move!
$filename = 'readme.txt';

// check for exists
if (!file_exists($filename)) {
    die("File $filename does not exists");
}

// get contents
$contents = file_get_contents($filename);

// display contents
echo $contents . '<br>';



// download a webpage by file_get_contents
$url = 'https://php.net';
$html = file_get_contents($url);
echo $html . '<br><br>';