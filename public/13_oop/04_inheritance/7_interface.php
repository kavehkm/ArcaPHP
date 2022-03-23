<?php
/* introduce interface of PHP
* for sake of simplicity:
* interface is a abstract class that all methods of class also abstract!
*/
interface Logger
{
    public function log($message);
}


class FileLogger implements Logger
{
    private $handle;

    private $logFile;

    public function __construct($filename, $mode = 'a')
    {
        $this->logFile = $filename;
        // open log file for append
        $this->handle = fopen($this->logFile, $mode) or die('Could not open the log file');
    }

    public function log($message)
    {
        $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
        fputs($this->handle, $message);
    }

    public function __destruct()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}


class DatabaseLogger implements Logger
{
    public function log($message)
    {
        echo sprintf("Log %s to the database\n", $message);
    }
}


// instanciate and test
$loggers = [
    new FileLogger('log.txt'),
    new DatabaseLogger()
];

foreach($loggers as $logger) {
    $logger->log('Log message');
}