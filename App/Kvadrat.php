<?php

namespace App;

class Kvadrat implements GeometrijskiOblik
{
    public $a;

    public function __construct($a)
    {
        if(is_numeric($a) && $a>=0)
        {
        $this->a = $a;
        }
        else
        { throw new \Exception("Greška!!");}
    }

    public function Obim()
    {
        return 4*$this->a;
    }

    public function Povrsina()
    {
        return pow($this->a,2);
    }

    public function Ispis()
    {
        return "Kvadrat stranice a:".$this->a.", ima obim:".$this->Obim()." i površinu:".$this->Povrsina();
    }
}