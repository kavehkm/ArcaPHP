<?php
// PHP unserialize magic methods:
// 1) __wakeup
// 2) __unserialize

class FileReader
{
    private $filehandle;

    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->open();
    }

    private function open()
    {
        $this->filehandle = fopen($this->filename, 'r');
        // for chaining...
        return $this;
    }

    public function read()
    {
        $contents = fread($this->filehandle, filesize($this->filename));

        return nl2br($contents);
    }

    public function close()
    {
        if ($this->filehandle) {
            fclose($this->filehandle);
        }
    }

    public function __sleep()
    {
        $this->close();
        return ['filename'];
    }

    public function __wakeup()
    {
        $this->open();
    }
}


// test

// serialize
$filename = 'objects.dat';
file_put_contents($filename, serialize(new FileReader('readme.txt')));

// unserialize
$file_reader = unserialize(file_get_contents($filename));
echo $file_reader->read();
$file_reader->close();