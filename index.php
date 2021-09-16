<?php

use App\Krug;
use App\Kvadrat;
use App\Pravougaonik;
use App\Trougao;

require "autoload.php";

try
{
    $k = new Kvadrat(3);
    echo $k->Ispis().PHP_EOL;

    $p = new Pravougaonik(2,4);
    echo $p->Ispis().PHP_EOL;

    $kr = new Krug(6);
    echo $kr->Ispis().PHP_EOL;

    $t = new Trougao(5, 6, 7, 3);
    echo $t->Ispis().PHP_EOL;
}
catch(Exception $e)
{
    echo $e->getMessage();
    die();
}