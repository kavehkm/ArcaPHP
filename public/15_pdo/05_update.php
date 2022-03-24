<?php

$connection = require '01_connect.php';


$person = [
    'id' => 1,
    'name' => 'updated_name'
];


$sql = 'update test set name=:name where id=:id;';


try {
    // prepare
    $stmt = $connection->prepare($sql);
    // execute
    $stmt->execute([
        'name' => $person['name'],
        'id' => $person['id']
    ]);
    // display result
    echo 'Record updated successfully' . '<br>';
} catch (PDOException $ex) {
    echo 'Cannot update record cause of: ' . $ex->getMessage() . '<br>';
}