<?php
// empty for
$i = 0;
for (;;) {
    echo $i . '<br>';
    $i++;
    if ($i > 5) {
        break;
    }
}


// simple for
$total = 0;
for ($i = 1; $i < 11; $i++) {
    $total += $i;
}

echo 'Total is: ' . $total . '<br>';