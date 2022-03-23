<?php
// using parent class method and properties in child
class BankAccount
{
    private $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
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
        // for chaining...
        return $this;
    }
}


class SavingAccount extends BankAccount
{
    private $interestRate;

    public function __construct($balance, $interestRate)
    {
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    public function addInterest()
    {
        $interest = $this->interestRate * $this->getBalance();
        $this->deposit($interest);
    }
}


// create some instance to test
$account = new SavingAccount(100, 0.05);
$account->addInterest();
echo 'Saving account balance after add interest is: ' . $account->getBalance() . '<br>';