<?php
class Movie
{
    public $name;
    public $genre;
    public $director;
    public $year;

    public function nameGenre() {
        return $this->name . " " . $this->genre;
    }

    function __construct($_name, $_genre, $_director, $_year = 18) {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->year = $_year;
    }
}