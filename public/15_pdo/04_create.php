<?php

$connection = require '01_connect.php';


$sql = 'insert into test(name) values(:name);';


$names = [
    'kaveh',
    'amin',
    'atoosa',
    'ahmad'
];


try {
    $stmt = $connection->prepare($sql);
    foreach($names as $name) {
        // exec query
        $stmt->execute(['name' => $name]);
        // get last inserted id
        $id = $connection->lastInsertId();
        // display result for each inserted record
        echo "Record($id, $name) inserted successfully" . "<br>";
    }
} catch (PDOException $ex) {
    echo 'Cannot insert record cause of: ' . $ex->getMessage() . '<br>';
}