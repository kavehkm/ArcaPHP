<?php
// assoc array
$roles = [
    'admin' => 1,
    'approver' => 2,
    'editor' => 3,
    'subscriber' => 4
];

// check admin key exists in roles array
$result = array_key_exists('admin', $roles);

// display result
var_dump($result);
echo '<br>';


// array_key_exists() vs isset()
$roles = [
    'admin' => 1,
    'approver' => 2,
    'editor' => 3,
    'subscriber' => 4
];

var_dump(isset($roles['approver']));
echo '<br>';
var_dump(array_key_exists('approver', $roles));
echo '<br>';

var_dump(isset($roles['user']));
echo '<br>';
var_dump(array_key_exists('user', $roles));
echo '<br>';


// define new assoc array to demonstrate main diff between isset and array_key_exists
$post = [
    'title' => 'PHP array_key_exists',
    'thumbnail' => null
];

var_dump(isset($post['thumbnail']));
echo '<br>';
var_dump(array_key_exists('thumbnail', $post));
echo '<br>';