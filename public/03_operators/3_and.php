<?php
// some variable
$price = 100;
$qty = 5;

// combine two comparision with &&
$discounted = $qty > 3 && $price > 99;

// echo result
var_dump($discounted);