<?php

// single quote string
$single_quote_string = 'PHP string is awsome';

// double quote string
$double_quote_string = "PHP string is awsome";

// variable interpolation by double quoted string
$name = 'kaveh';
$interpolated_string = "Hello and welcome $name";

// access characters in a string by index
$k_char = $name[0];
$e_char = $name[3];

// get length of a string
$len_of_name = strlen($name);


// echo
echo $single_quote_string . '<br>';
echo $double_quote_string . '<br>';
echo $interpolated_string . '<br>';
echo "0-index character of $name is: $k_char <br>";
echo "3-index character of $name is: $e_char";