<?php
// connection
$connection = require '01_connect.php';

// sql
$sql = 'insert into test(name) values(:name);';

// params
$params = [
    'name' => 'kaveh'
];

// insert
try {
    $stmt = $connection->prepare($sql);
    $stmt->execute($params);
    echo 'Record inserted successfully' . '<br>';
} catch (PDOException $ex) {
    echo 'Cannot insert record cause of: ' . $ex->getMessage() . '<br>';
}