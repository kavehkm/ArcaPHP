<?php
// get size of files in php
$filename1 = 'phplogo.svg';
$filename2 = 'readme.txt';

// put them into an array
$files = [$filename1, $filename2];


foreach($files as $file) {
    echo $file . ': ' . filesize($file) . 'B<br>';
}
