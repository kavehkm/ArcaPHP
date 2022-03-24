<?php
class Service1
{
    public static $name = 'Service1';

    public static function getName()
    {
        return self::$name;
    }

    public static function do()
    {
        echo self::$name . ' Do something...' . '<br>';
    }
}