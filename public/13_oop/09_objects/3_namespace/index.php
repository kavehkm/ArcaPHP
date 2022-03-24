<?php
// require Student and Customer classes
require_once __DIR__ . '/src/Model/Student.php';
require_once __DIR__ . '/src/Model/Customer.php';
// use namespace
use App\Model\Student;
use App\Model\Customer;


// instanciate
$student = new Student(666, 'kaveh');
$customer = new Customer(100, 'amin');
// display
echo 'Student info:' . '<br>';
echo $student->getId() . ' - ' . $student->getName() . '<br>';
echo 'Customer info: ' . '<br>';
echo $customer->getId() . ' - ' . $customer->getName() . '<br>';