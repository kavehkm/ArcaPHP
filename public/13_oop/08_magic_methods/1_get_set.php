<?php
// __get and __set magic methods in action
class HtmlElement
{
    private $attributes = [];

    private $tag;

    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }

    public function html($innerHTML = '')
    {
        $html = "<{$this->tag}";
        foreach($this->attributes as $key => $value) {
            $html .= ' ' . $key . '="' . $value . '"';
        }
        $html .= '>';
        $html .= $innerHTML;
        $html .= "</{$this->tag}>";

        return $html;
    }
}

// instanciate and test
$article = new HtmlElement('article');
$article->id = 'main';
$article->class = 'light';

echo $article->class . '<br>';
echo $article->id . '<br>';
echo $article->html('Hello world') . '<br>';