<?php

class Movie
{
    public $titolo;
    public $desc;
    public $genere;

    function __construct($titolo, $desc, Genere $genere)
    {
        $this->titolo = $titolo;
        $this->desc = $desc;
        $this->genere = $genere;
    }
}
