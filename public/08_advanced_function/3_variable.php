<?php
// define and use of variable-function in php
$f = 'strlen';

echo $f('Hello world') . '<br>';



// some examples of variable-function use
class Str
{
    private $s;

    public function __construct(string $s)
    {
        $this->s = $s;
    }

    public function lower()
    {
        return mb_strtolower($this->s, 'UTF-8');
    }

    public function upper()
    {
        return mb_strtoupper($this->s, 'UTF-8');
    }

    public function title()
    {
        return mb_convert_case($this->s, MB_CASE_TITLE, 'UTF-8');
    }

    public function convert(string $format)
    {
        if (!in_array($format, ['lower', 'upper', 'title'])) {
            throw new Exception('The format is not supported.');
        }

        return $this->$format();
    }
}

$str = new Str('Hello there');

echo $str->convert('title') . '<br>';



class Str2
{
    private $s;

    public function __construct(string $s)
    {
        $this->s = $s;
    }

    public function __toString()
    {
        return $this->s;
    }

    public static function compare(Str2 $s1, Str2 $s2)
    {
        return strcmp($s1, $s2);
    }
}

$str1 = new Str2('Hi');
$str2 = new Str2('Hi');

$action = 'compare';

echo Str2::$action($str1, $str2) . '<br>';