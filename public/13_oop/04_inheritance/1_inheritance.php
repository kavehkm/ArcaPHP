<?php
// introduce inheritance relation in PHP
class BankAccount
{
    private $balance;

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


// create some instance
$account = new SavingAccount();
$account->deposit(100);
$account->setInterestRate(0.05);
$account->addInterest();
echo 'Saving account balance is: ' . $account->getBalance();