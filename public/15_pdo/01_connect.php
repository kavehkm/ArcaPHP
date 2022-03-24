<?php
// database configs
require_once __DIR__ . '/00_config.php';


// connection class
class Connection
{
    public static function make($host, $dbname, $user, $password)
    {
        // create dsn
        $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

        // try for connection
        try {
            // create pdo object
            $pdo = new PDO($dsn, $user, $password);
            // set error mode
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $pdo;
        } catch (PDOException $ex) {
            die('Database connection error: ' . $ex->getMessage());
        }
    }
}


return Connection::make($host, $dbname, $user, $password);