<?php
// demonstrate basic exception handling
$data = [];

try {
    // open data.csv file for read
    $f = fopen('data.csv', 'r');

    // read file line by line
    do {
        $row = fgetcsv($f);
        $data[] = $row;

    } while ($row);

    // after last line close file
    fclose($f);
} catch (Exception $ex) {
    // display error if any
    $error = true;
    echo $ex->getMessage() . '<br>';
}