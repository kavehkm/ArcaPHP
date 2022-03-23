<?php
// create File-wrapper class to demostrate use of __destruct magic method in PHP
class File
{
    private $handle;

    private $filename;

    public function __construct($filename, $mode = 'r')
    {
        $this->filename = $filename;
        $this->handle = fopen($this->filename, $mode);
    }

    public function __destruct()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }

    public function read()
    {
        return fread($this->handle, filesize($this->filename));
    }
}


// test File-wrapper class
$file = new File('test.txt', 'r');
echo $file->read();