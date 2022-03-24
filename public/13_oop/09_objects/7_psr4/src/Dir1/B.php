<?php
namespace Dir1;


class B
{
    private $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}