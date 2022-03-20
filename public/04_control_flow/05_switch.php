<?php
// simple switch
$role = 'admin';
$message = '';

switch ($role) {
    case 'admin':
        $message = 'Welcome, admin!';
        break;
    case 'editor':
        $message = 'Welcome! You have some pending articles to edit';
        break;
    case 'author':
        $message = 'Welcome! Do you want to publish the draft articles';
        break;
    case 'subscriber':
        $message = 'Welcome! check out some new articles';
        break;
    default:
        $message = 'your not authorized to access this page';
}

echo $message . '<br>';


// combined case switch
$message = '';
$role = 'author';

switch ($role) {
    case 'admin':
        $message = 'Welcome admin!';
        break;
    case 'editor':
    case 'author':
        $message = 'Welcome! do you want to create a new article?';
        break;
    case 'subscriber':
        $message = 'Welcome! check out some new articles';
        break;
    default:
        $message = 'Your are not authorized to access this page';
}

echo $message . '<br>';