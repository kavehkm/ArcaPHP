<?php
// foreach for array
$colors = [
    'red',
    'green',
    'blue'
];

foreach ($colors as $color) {
    echo $color . '<br>';
}


// foreach for assoc array
$capitals = [
    'japan' => 'tokyo',
    'france' => 'paris',
    'germany' => 'berlin'
];

foreach ($capitals as $country => $capital) {
    echo $country . ' - ' . $capital . '<br>';
}
