<?php
// get current timestamp
$current_time = time();
echo 'Seconds from 1970: ' . $current_time . '<br>';


// create human readable date and time
$current_date_time = date('Y-m-d H:i:s', time());
echo 'Current date and time: ' . $current_date_time . '<br>';


// play with date and time
$current_time = time();
$seven_days_later = $current_time + 7 * 24 * 3600;
echo '7 Days later date and time is: ' . date('Y-m-d H:i:s', $seven_days_later). '<br>';


// create timestamp from date and time
$timestamp = mktime(10, 50, 59, 5, 20, 2000);
echo 'Created timestamp datetime is: ' . date('Y-m-d H:i:s', $timestamp) . '<br>';