<?php
// create anonymouse class
$logger = new class {
    public function log(string $message)
    {
        echo $message . '<br>';
    }
};

$logger->log('Hello world');
