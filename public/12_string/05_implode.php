<?php
// use of implode function
$names = [
    'kaveh',
    'ahmad',
    'atoosa',
    'amin'
];

// join names by ' - ' sep
$joined_names = implode(' - ', $names);

// display results
print_r($names);
echo '<br>';
echo $joined_names;