<?php

namespace App;

class Pravougaonik extends AbstractGeometrijskiOblik implements GeometrijskiOblik
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

    protected function obim()
    {
        return 2*$this->a + 2*$this->b;
    }

    protected function povrsina()
    {
        return $this->a*$this->b;
    }

    public function ispis()
    {
        return "Pravougaonik stranica a:".$this->a." i b:".$this->b.", ima obim:".$this->Obim()." i površinu:".$this->Povrsina();
    }
}