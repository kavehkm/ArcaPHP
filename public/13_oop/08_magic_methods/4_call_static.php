<?php
// use of __callStatic magic method in PHP
class Str
{
    private static $methods = [
        'upper' => 'strtoupper',
        'lower' => 'strtolower',
        'len' => 'strlen'
    ];

    public static function __callStatic($name, $arguments)
    {
        if (!array_key_exists($name, self::$methods)) {
            throw new BadMethodCallException('The ' . $name . ' is not supported.');
        }
        return call_user_func_array(self::$methods[$name], $arguments);
    }
}


// test
echo Str::lower('Hello') . '<br>';
echo Str::upper('Hello') . '<br>';
echo Str::len('Hello') . '<br>';