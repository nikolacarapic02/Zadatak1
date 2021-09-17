<?php

use App\Krug;
use App\Kvadrat;
use App\Pravougaonik;
use App\Trougao;
use App\GeometrijskiOblik;

require "autoload.php";

function ispisFigure(GeometrijskiOblik $obj)
    {
        return $obj->ispis();
    }

try
{
    $k = new Kvadrat(3);
    echo ispisFigure($k).PHP_EOL;

    $p = new Pravougaonik(2,4);
    echo ispisFigure($p).PHP_EOL;

    $kr = new Krug(6);
    echo ispisFigure($kr).PHP_EOL;

    $t = new Trougao(5, 6, 7, 3);
    echo ispisFigure($t).PHP_EOL;
}
catch(Exception $e)
{
    echo $e->getMessage();
    die();
}