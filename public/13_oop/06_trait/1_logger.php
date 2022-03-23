<?php
// trait concepts through Logger class
trait Logger
{
    public function log($msg)
    {
        echo '<pre>';
        echo date('Y-m-d h:i:s') . ':' . $msg . '<br>';
        echo '</pre>';
    }
}


class BankAccount
{
    // use Logger trait
    use Logger;

    private $accountNumber;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account created");
    }
}


class User
{
    // use Logger trait
    use Logger;

    public function __construct()
    {
        $this->log('A new user created');
    }
}


// instanciate and use
$account = new BankAccount(666);
$user = new User();