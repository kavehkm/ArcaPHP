<?php
// attach loaders
require_once 'functions.php';

// test service loader
echo Service1::getName() . '<br>';
echo Service2::getName() . '<br>';

// test model loader
echo Model1::getName() . '<br>';
echo Model2::getName() . '<br>';