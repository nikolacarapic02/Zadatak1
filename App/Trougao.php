<?php

namespace App;

class Trougao extends AbstractGeometrijskiOblik implements GeometrijskiOblik
{
    private $a, $b, $c, $ha;

    public function __construct($a, $b, $c , $ha)
    {
        if((is_numeric($a) && is_numeric($b) && is_numeric($ha) && is_numeric($c)) && ($a>=0 && $b>=0 && $ha>=0 && $c>=0))
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
            $this->ha = $ha;
        }
        else
        {
            throw new \Exception("Greška!!");
        }
    }

    protected function obim()
    {
        return $this->c + $this->b + $this->a;
    }

    protected function povrsina()
    {
        return $this->ha*$this->a/2;
    }

    public function ispis()
    {
        return "Trougao stranica a:".$this->a." i b:".$this->b." i c:".$this->c.", visine ha:".$this->ha.", ima obim:".$this->Obim()." i površinu:".$this->Povrsina();
    }
}