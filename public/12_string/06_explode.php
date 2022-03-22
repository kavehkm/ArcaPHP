<?php
// use of explode function
$joined_names = 'kaveh - sara - ahmad - amin';

// explode joned_names into names array by ' - '
$names = explode(' - ', $joined_names);

// display result
echo $joined_names . '<br>';
print_r($names);