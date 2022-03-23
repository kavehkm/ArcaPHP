<?php
// use object as a function by __invoke magic method
class Test
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function __invoke($time = 1)
    {
        for ($i=0; $i < $time; $i++) { 
            echo $this->message . '<br>';
        }
    }
}


// test
$test = new Test('Hello world');
$test(10);