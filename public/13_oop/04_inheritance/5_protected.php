<?php
// working with protected access modifier
class Customer
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function format()
    {
        return ucwords($this->name);
    }

    public function getName()
    {
        return $this->format($this->name);
    }
}


class VIP extends Customer
{
    protected function format()
    {
        return strtoupper($this->name);
    }
}


// create some instance
$bob = new Customer('bob allen');
echo 'normal customer: ' . $bob->getName() . '<br>';
$alex = new VIP('alex ferguson');
echo 'vip customer: ' . $alex->getName() . '<br>';