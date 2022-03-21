<?php
// normal array
$actions = [
    'new',
    'edit',
    'update',
    'view',
    'delete'
];

// check `update` value exists in actions array
$result = in_array('update', $actions);

var_dump($result);
echo '<br>';


// check `publish` value exists in actions array
$result = in_array('publish', $actions);

var_dump($result);
echo '<br>';


// coerce check
$user_ids = [10, '15', '20', 30];

$result = in_array(15, $user_ids);

var_dump($result);
echo '<br>';


// strict check
$result = in_array(15, $user_ids, true);

var_dump($result);
echo '<br>';