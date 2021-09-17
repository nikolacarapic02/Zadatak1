<?php

namespace App;

class Pravougaonik implements GeometrijskiOblik
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        if((is_numeric($a) && is_numeric($b)) && ($a>=0 && $b>=0))
        {
            $this->a = $a;
            $this->b = $b;
        }
        else
        {
            throw new \Exception("Greška!!");
        }
    }

    public function Obim()
    {
        return 2*$this->a + 2*$this->b;
    }

    public function Povrsina()
    {
        return $this->a*$this->b;
    }

    public function Ispis()
    {
        return "Pravougaonik stranica a:".$this->a." i b:".$this->b.", ima obim:".$this->Obim()." i površinu:".$this->Povrsina();
    }
}