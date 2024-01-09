<?php
require_once __DIR__ . "/Models/Movie.php";

$mamma_mia = new Movie("Mamma Mia!", "Musical", "Phyllida Lloyd", "2008");

$gotg = new Movie("Guardians of the Galaxy", "Action", "James Gunn", "2018");

var_dump($mamma_mia, $gotg);

?>