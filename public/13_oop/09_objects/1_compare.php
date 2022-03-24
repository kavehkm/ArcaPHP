<?php
// compare objects with == and ===
class Point
{
    private $x;

    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}


// create some instance
$p1 = new Point(1, 2);
$p2 = new Point(1, 2);
$p3 = new Point(10, 20);
$p4 = $p3;


// test with ==
if ($p1 == $p2) {
    echo 'p1 and p2 are equal' . '<br>';
} else {
    echo 'p1 and p2 are not equal' . '<br>';
}

if ($p1 == $p3) {
    echo 'p1 and p3 are equal' . '<br>';
} else {
    echo 'p1 and p3 are not equal' . '<br>';
}

if ($p3 == $p4) {
    echo 'p3 and p4 are equal' . '<br>';
} else {
    echo 'p3 and p4 are not equal' . '<br>';
}


// test with ===
if ($p1 === $p2) {
    echo 'p1 and p2 are same' . '<br>';
} else {
    echo 'p1 and p2 are not same' . '<br>';
}

if ($p1 === $p3) {
    echo 'p1 and p3 are same' . '<br>';
} else {
    echo 'p1 and p3 are not same' . '<br>';
}

if ($p3 === $p4) {
    echo 'p3 and p4 are same' . '<br>';
} else {
    echo 'p3 and p4 are not same' . '<br>';
}