<?php
// define simple class in php with properties and method
class BankAccount
{
    public $accountNumber;

    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
}

// instanciate some object
$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;
echo 'Account balance before deposit: ' . $account->balance . '<br>';
$account->deposit(100);
echo 'Account balance after deposit: ' . $account->balance . '<br>';
$account->withdraw(150);
echo 'Account balance after withdraw: ' . $account->balance . '<br>';