<?php
// use of __call magic method in PHP
class Str
{
    private $s = '';

    private $functions = [
        'length' => 'strlen',
        'upper' => 'strtoupper',
        'lower' => 'strtolower'
    ];

    public function __construct(string $s)
    {
        $this->s = $s;
    }

    public function __call($name, $arguments)
    {
        if (!array_key_exists($name, $this->functions)) {
            throw new BadMethodCallException();
        }

        array_unshift($arguments, $this->s);

        return call_user_func_array($this->functions[$name], $arguments);
    }
}


// test
$s = new Str('Hello world!');

echo $s->upper() . '<br>';
echo $s->lower() . '<br>';
echo $s->length() . '<br>';