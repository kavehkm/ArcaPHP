<?php
// some variable
$expired = true;
$purged = false;

// check conditions with ||
$clear_cache = $expired || $purged;

// echo result
var_dump($clear_cache);