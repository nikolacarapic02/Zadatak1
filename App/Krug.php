<?php

namespace App;

class Krug implements GeometrijskiOblik
{
    const PI = 3.14;
    private $r;

    public function __construct($r)
    {
        if(is_numeric($r) && $r>=0)
        {
            $this->r = $r;
        }
        else
        {
            throw new \Exception("Greška!!");
        }
    }

    protected function Obim()
    {
        return 2*$this->r*self::PI;
    }

    protected function Povrsina()
    {
        return pow($this->r,2)*self::PI;
    }

    public function Ispis()
    {
        return "Krug poluprečnika r:".$this->r.", ima obim:".$this->Obim()." i površinu:".$this->Povrsina();
    }
}