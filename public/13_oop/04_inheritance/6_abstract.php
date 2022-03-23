<?php
/* demonstrate abstract class and abstract method concepts
* 1) you cannot instanciate abstract class
* 2) if you extends abstract class you must implement abstract methods if any
*/

// abstract class Dumper
abstract class Dumper
{
    abstract public function dump($data);
}


// WebDumper class extends abstract class Dumper
class WebDumper extends Dumper
{
    public function dump($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}


// Console class extends abstract class Dumper
class ConsoleDumper extends Dumper
{
    public function dump($data)
    {
        var_dump($data);
    }
}


// DumperFactor class return dumper instance base on Environment
class DumperFactory
{
    public static function getDumper()
    {
        return PHP_SAPI === 'cli' ?
            new ConsoleDumper() :
            new WebDumper();
    }
}


// test functionalities
$dumper = DumperFactory::getDumper();
$dumper->dump('PHP Abstract class is awsome');