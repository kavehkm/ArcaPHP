<?php
// trait conflict resolve
trait FileLogger
{
    public function log($msg)
    {
        echo 'File Logger ' . date('Y-m-d h:i:s') . ': ' . $msg . '<br>';
    }
}


trait DatabaseLogger
{
    public function log($msg)
    {
        echo 'Database Logger ' . date('Y-m-d h:i:s') . ': ' . $msg . '<br>';
    }
}


class Logger
{
    use FileLogger, DatabaseLogger{
        DatabaseLogger::log as logToDatabase;
        FileLogger::log insteadof DatabaseLogger;
    }
}


// test
$logger = new Logger();
$logger->log('this is test message #1');
$logger->logToDatabase('this is test message #2');