<?php

// bootstraping app
require __DIR__ . '/src/bootstrap.php';


// test auto-loader

// models
$customer = new Customer(666, 'kaveh');
echo 'Customer info:' . '<br>';
echo $customer->getId() . ' --- ' . $customer->getName() . '<br>';
//services
echo 'Service info:' . '<br>';
echo Service1::getName() . '<br>';
Service1::do();