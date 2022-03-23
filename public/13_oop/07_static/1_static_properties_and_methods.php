<?php
// working with static method and properties in PHP class
class HttpRequest
{
    // static method
    public static function uri()
    {
        return strtolower($_SERVER['REQUEST_URI']);
    }
}

// use of static method outside of class
echo HttpRequest::uri() . '<br>';


// access to current class by self keyword
// also demonstrate Singleton DesignPattern
class App
{
    private static $app = null;

    private function __construct()
    {
    }

    public static function get()
    {
        if (!self::$app) {
            self::$app = new App();
        }
        return self::$app;
    }

    public function bootstrap()
    {
        echo 'App is bootstrapping...' . '<br>';
    }
}


// test singleton
$app = App::get();
$app->bootstrap();