<?php
// demonstrate PHP PolyMorphism concepts through:
// 1) Abstract class
// 2) Interface


////////////////////
// Abstract Class //
////////////////////
abstract class Person
{
    abstract public function greet();
}


class English extends Person
{
    public function greet()
    {
        return 'Hello';
    }
}


class German extends Person
{
    public function greet()
    {
        return 'Hallo';
    }
}


class French extends Person
{
    public function greet()
    {
        return 'Bonjour';
    }
}


// instanciate and test
function greeting($people) {
    foreach($people as $person) {
        echo $person->greet() . '<br>';
    }
}

$people = [
    new English(),
    new German(),
    new French()
];

greeting($people);



///////////////
// Interface //
///////////////
interface Gun
{
    public function shoot();

    public function reload();
}


class AK47 implements Gun
{
    private $numberOfbullets = 0;

    public function shoot()
    {
        if ($this->numberOfbullets > 0) {
            echo 'BANG>>>' . '<br>';
            $this->numberOfbullets -= 1;
        } else {
            echo 'pet<<<' . '<br>';
        }
    }

    public function reload()
    {
        echo 'Reloading...' . '<br>';
        $this->numberOfbullets = 30;
        echo 'Reloaded' . '<br>';
    }
}


class M4 implements Gun
{
    private $numberOfbullets = 0;

    public function shoot()
    {
        if ($this->numberOfbullets > 0) {
            echo 'tep>>>' . '<br>';
            $this->numberOfbullets -= 1;
        } else {
            echo 'pet<<<' . '<br>';
        }
    }

    public function reload()
    {
        echo 'Reloading...' . '<br>';
        $this->numberOfbullets = 25;
        echo 'Reloaded' . '<br>';
    }
}


// instaciate and test
function shooting($guns) {
    foreach($guns as $gun) {
        $gun->shoot();
    }
}

// create ak and reload
$ak = new AK47();
$ak->reload();
// create m4 and reload
$m4 = new M4();
$m4->reload();
// pack as array
$guns = [$ak, $m4];
// send to auto-shooter :)
shooting($guns);