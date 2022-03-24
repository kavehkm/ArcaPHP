<?php
$connection = require '01_connect.php';


$sql = 'select * from  test';


try {
    // prepare
    $stmt = $connection->prepare($sql);
    // execute
    $stmt->execute();
    // fetch
    while ($record = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo 'Record(' . $record['id'], ',' . $record['name'] . ')' . '<br>';
    }
} catch (PDOException $ex) {
    echo 'Cannot read records cause of: ' . $ex->getMessage() . '<br>';
}