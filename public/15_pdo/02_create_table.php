<?php
// create table
$connection = require __DIR__ . '/01_connect.php';


// table defination
$table_sql = '
    CREATE TABLE IF NOT EXISTS test(
        id      INT             PRIMARY KEY     AUTO_INCREMENT,
        name    VARCHAR(255)    NOT NULL
    );
';

// create table
try {
    $connection->exec($table_sql);
    echo 'Table created successfully' . '<br>';
} catch (PDOException $ex) {
    echo 'Cannot create table cause of: ' . $ex->getMessage() . '<br>';
}