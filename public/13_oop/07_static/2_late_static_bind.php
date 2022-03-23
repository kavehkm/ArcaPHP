<?php
// define and solve static properties inheritance problem

// first check problem
class Model
{
    protected static $tableName = 'Model';

    public static function getTableName()
    {
        return self::$tableName;
    }
}


class User extends Model
{
    protected static $tableName = 'User';
}

// check
echo User::getTableName() . '<br>';



// resolve problem by introduce late-static-bind
class Model1
{
    protected static $tableName = 'Model1';

    public static function getTableName()
    {
        return static::$tableName;
    }
}


class User1 extends Model1
{
    protected static $tableName = 'User1';
}

// check
echo Model1::getTableName() . '<br>';
echo User1::getTableName() . '<br>';