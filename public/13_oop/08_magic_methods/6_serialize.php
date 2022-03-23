<?php
// PHP serialization magic methods:
// __sleep
// __serialize


class Customer
{
    private $id;

    private $name;

    private $email;

    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function __serialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email
        ];
    }
}


// test

// serialize
$customer = new Customer(666, 'kaveh', 'kaveh@gmail.com');
$str = serialize($customer);
var_dump($str);
echo '<br>';

// unserialize
$customer2 = unserialize($str);
echo $customer2->getId() . '<br>';
echo $customer2->getName() . '<br>';
echo $customer2->getEmail() . '<br>';