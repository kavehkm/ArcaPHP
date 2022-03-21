<?php
// define normal array
$prices = [100, 0.1];

// convert array to individual variables known approach
$buy_price = $prices[0];
$tax = $prices[1];
// display result
echo 'buy price is: ' . $buy_price . ' and tax is: ' . $tax . '<br>';


// convert array ot individual variables by list
$prices = [1000, 1.0];
list($buy_price, $tax) = $prices;
echo 'buy price is: ' . $buy_price . ' and tax is: ' . $tax . '<br>';


// example of list with escape
$prices = [100, 0.1, 0.05];
list($buy_price, ,$discount) = $prices;
echo 'buy price is: ' . $buy_price . ' and discount is: ' . $discount . '<br>';

// example of nest list uses
$elements = ['body', ['white', 'blue']];
list($element, list($bgcolor, $color)) = $elements;
echo 'element is: ' . $element . ', bgcolor is: ' . $bgcolor . ' and color is: ' . $color . '<br>';

// example of user list with assoc array
$person = [
    'first_name' => 'kaveh',
    'last_name' => 'mehrbanian',
    'age' => 27
];
list(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'age' => $age
) = $person;

echo "first name is $first_name, last name is $last_name and age is $age <br>";