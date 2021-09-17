<?php

namespace App;

abstract class AbstractGeometrijskiOblik {

    protected function povrsina(){
        throw new \Exception("Greška!!");
    }

    protected function obim(){
        throw new \Exception("Greška!!");
    }
}