<?php
    Class Meta{
        private $atributos = array ();
    }

    public function __construct($vAtributos){
        $this->atributos = $vAtributos;
    } 

    public function __toString(){
    {
        $meta = '<meta ';

        foreach ($this->atributos as $vAtributos => $val) {
            $meta .= $vAttribute . '="' . $val . '" ';
        }
        
        $meta .= ">";

        return $meta;
    }
?>