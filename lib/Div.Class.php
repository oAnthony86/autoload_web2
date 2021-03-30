<?php

class Div
{
    private $props = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addProp($array) 
    {
        $this->props[] = $array;
    }

    public function __toString()
    {
        $div = '<div class="'.$this->class.'">';

        foreach ($this->props as $valor) {
            $div .= $valor;
        }
        
        $div .= "</div>";

        return $div;
    }

}