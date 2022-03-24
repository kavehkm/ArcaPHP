<?php
$connection = require '01_connect.php';

$sql = 'delete from test where id >= :id;';

$params = [
    'id' => 1
];


try {
    $stmt = $connection->prepare($sql);
    $stmt->execute($params);
    echo 'Records deleted successfully' . '<br>';
} catch (PDOException $ex) {
    echo 'Cannot delete records cause of: ' . $ex->getMessage() . '<br>';
}