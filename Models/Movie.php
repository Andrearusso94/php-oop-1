<?php

class Movie
{
    /* public $titolo;
    public $desc;
    public $genere;
*/

    //another sintax//
    function __construct(public $titolo, public $desc, public Genere $genere)
    {
        $this->titolo = $titolo;
        $this->desc = $desc;
        $this->genere = $genere;
    }
}
