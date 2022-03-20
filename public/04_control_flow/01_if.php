<?php

// simple if
$is_admin = true;

if ($is_admin)
    echo 'Welcome, admin!<br>';


// compound if
$can_edit = false;
$is_admin = true;

if ($is_admin) {
    echo 'Welcome, admin!<br>';
    $can_edit = true;
}


// nest if
$is_admin = true;
$can_approve = true;

if ($is_admin) {
    echo 'Welcome, admin!<br>';
    if ($can_approve) {
        echo 'Please approve the pending items<br>';
    }
}