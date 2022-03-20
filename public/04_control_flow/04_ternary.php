<?php
// simple ternary
$is_user_logged_in = false;

$title = $is_user_logged_in ? 'logout' : 'login';

echo $title . '<br>';


// chain ternary
$eligible = true;
$has_credit = false;

$message = $eligible
                    ?
                    ($has_credit
                                ?
                                'Can use the credit'
                                :
                                'Not enough credit')
                    :
                    'Not eligible to buy';

echo $message . '<br>';