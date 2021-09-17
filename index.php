<?php

use App\Krug;
use App\Kvadrat;
use App\Pravougaonik;
use App\Trougao;
use App\GeometrijskiOblik;

require "autoload.php";

try
{
    function IspisFigure(GeometrijskiOblik $obj)
    {
        return $obj->Ispis();
    }

    $k = new Kvadrat(3);
    echo IspisFigure($k).PHP_EOL;

    $p = new Pravougaonik(2,4);
    echo IspisFigure($p).PHP_EOL;

    $kr = new Krug(6);
    echo IspisFigure($kr).PHP_EOL;

    $t = new Trougao(5, 6, 7, 3);
    echo IspisFigure($t).PHP_EOL;
}
catch(Exception $e)
{
    echo $e->getMessage();
    die();
}