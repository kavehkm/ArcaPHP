<?php
// introduce __construct magic method in PHP
class BankAccount
{
    private $accountNumber;

    private $balance;

    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function getBalance()
    {
        return $this->balance;
    }

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


// play with instance of BankAccount class
$account = new BankAccount(1000, 2000);
$account->deposit(666);
$account->withdraw(666);
$account->withdraw(1000000);

echo 'Account number is: ' . $account->getAccountNumber() . '<br>';
echo 'Account balance is: ' . $account->getBalance() . '<br>';