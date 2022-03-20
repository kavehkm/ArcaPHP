<?php

const SALE_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALE_TAX);

echo 'net price: ' . $net_price;