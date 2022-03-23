<?php
// prevent from override by final keyword
class Robot
{
    public function greet()
    {
        return 'Hello';
    }

    final public function id()
    {
        return uniqid();
    }
}


class Android extends Robot
{
    public function greet()
    {
        return 'Hi';
    }

    public function id() // raise error: Cannot override final method Robot::id()
    {
        return uniqid('Android-');
    }
}

