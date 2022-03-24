<?php
// bootstrapping...
require __DIR__ . '/src/bootstrap.php';

// use
use Dir1\A;
use Dir1\B;


// test loader
$a = New A('kaveh');
$b = New B(26);
// display
echo $a->getName() . '<br>';
echo $b->getAge() . '<br>';