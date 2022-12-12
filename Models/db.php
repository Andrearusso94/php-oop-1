<?php
require __DIR__ . '/Movie.php';
require __DIR__ . '/Genere.php';

$matrix = new Movie('Matrix', 'Universo rosso e blu', new Genere('Fantasy'));
$fast_8 = new Movie('Fast 8', 'Toretto forever', new Genere('Azione'));

$db = [
    new Movie('Matrix', 'Universo rosso e blu', new Genere('Fantasy')),
    new Movie('Fast 8', 'Toretto forever', new Genere('Azione'))
];
