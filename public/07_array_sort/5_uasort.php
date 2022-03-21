<?php
// define assoc array to target with uasort
$countries = [
    'china' => ['gdp' => 12.238, 'gdp_growth' => 6.9],
    'germany' => ['gdp' => 3.69, 'gdp_growth' => 2.22],
    'japan' => ['gdp' => 4.872, 'gdp_growth' => 1.71],
    'usa' => ['gdp' => 19.485, 'gdp_growth' => 2.27]
];
// display array before uasort
echo 'before uasort:' . '<br>';
print_r($countries);
echo '<br>';

// uasort
uasort($countries, function ($x, $y) {
    return $x['gdp'] <=> $y['gdp'];
});
echo 'after uasort:' . '<br>';
print_r($countries);
echo '<br>';