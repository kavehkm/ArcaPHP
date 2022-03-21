<?php
// define names assoc array to target by uksort
$names = [
    'c' => 'Charlie',
    'A' => 'Alex',
    'b' => 'Bob'
];
// display array before uksort
echo 'before uksort:' . '<br>';
print_r($names);
echo '<br>';

// uksort
uksort($names, function ($x, $y) {
    return strtolower($x) <=> strtolower($y);
});

echo 'after uksort:' . '<br>';
print_r($names);
echo '<br>';