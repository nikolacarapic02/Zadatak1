<?php

namespace App;

class Kvadrat extends AbstractGeometrijskiOblik implements GeometrijskiOblik
{
    private $a;

    public function __construct($a)
    {
        if(is_numeric($a) && $a>=0)
        {
        $this->a = $a;
        }
        else
        { throw new \Exception("Greška!!");}
    }

    protected function obim()
    {
        return 4*$this->a;
    }

    protected function povrsina()
    {
        return pow($this->a,2);
    }

    public function ispis()
    {
        return "Kvadrat stranice a:".$this->a.", ima obim:".$this->Obim()." i površinu:".$this->Povrsina();
    }
}