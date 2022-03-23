<?php
// define simple class with private and public access modifiers
class Customer
{
    public $id;
    
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        return $this->name = $value;
    }
}

// instaciate customer object and play with public methods and properties
$kaveh = new Customer();
$kaveh->id = 666;
$kaveh->setName('kaveh');

echo 'id is: ' . $kaveh->id . ' and name is: ' . $kaveh->getName() . '<br>';