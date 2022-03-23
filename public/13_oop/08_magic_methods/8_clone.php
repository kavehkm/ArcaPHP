<?php
// concepts of deep copy by __clone magic method in PHP

class Address
{
    public $street;

    public $city;
}


class Person
{
    public $name;

    public $address;

    public function __construct($name)
    {
        $this->name = $name;
        $this->address = new Address();
    }

    public function __clone()
    {
        $this->address = clone $this->address;
    }
}

// test
$kaveh = new Person('kaveh');
$kaveh->address->city = 'Mashhad';
$kaveh->address->street = 'Shariati';

$amin = clone $kaveh;
$amin->name = 'amin';
$amin->address->city = 'Tehran';
$amin->address->street = 'YaftAbad';

var_dump($kaveh);
echo '<br><br><br>';
var_dump($amin);