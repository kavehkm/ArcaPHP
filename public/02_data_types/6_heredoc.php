<?php

// define some variable for interpolate
$first_name = 'kaveh';
$last_name = 'mehrbanian';
$age = 27;

// heredoc string
$heredoc_string = <<<TEXT
Hello and Welcome $first_name $last_name
your age is $age
TEXT;


// echo heredoc string
echo $heredoc_string;