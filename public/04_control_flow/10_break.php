<?php
// simple loop breaking
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . '<br>';
}


// nest loop breaking
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i == 3) {
            break 2;
        }
        echo "($i, $j)<br>";
    }
}