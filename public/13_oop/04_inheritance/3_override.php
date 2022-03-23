<?php
// overriding methods
class Robot
{
    public function greet()
    {
        return 'Hello';
    }
}


class Android extends Robot
{
    public function greet()
    {
        return 'Hi';
    }
}


// test override method: greet()
$robot = new Robot();
echo 'robot greeting: ' . $robot->greet() . '<br>';
$android = new Android();
echo 'android greeting: ' . $android->greet() . '<br>';



class BankAccount
{
    private $balance;

    public function __construct($amount)
    {
        $this->balance = $amount;
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
        return $this;
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
}


class CheckingAccount extends BankAccount
{
    private $minBalance;

    public function __construct($amount, $minBalance)
    {
        if ($amount > 0 && $amount >= $minBalance) {
            parent::__construct($amount);
            $this->minBalance = $minBalance;
        } else {
            $message = 'amount must be more than zero and higher than minBalance value';
            throw new InvalidArgumentException($message);
        }
    }

    public function withdraw($amount)
    {
        $canWithDraw = $amount > 0 &&
            $this->getBalance() - $amount > $this->minBalance;
        if ($canWithDraw) {
            parent::withdraw($amount);
        }
    }
}