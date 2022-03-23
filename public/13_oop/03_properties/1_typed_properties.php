<?php
// example typed-properties in PHP
class BankAccount
{
    public float $balance = 0;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}


// create instance
$account = new BankAccount(100);
echo 'Balance of account is: ' . $account->balance . '<br>';