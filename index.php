<?php

class Movie {
    // Dichiarazione delle variabili
    public $title;
    public $director;
    public $year;
    public $genre;

    // Dichiarazione del costruttore
    public function __construct($title, $director, $year, $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
    }

    // Definizione del metodo
    public function printMovieDetails() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Regista: " . $this->director . "<br>";
        echo "Anno: " . $this->year . "<br>";
        echo "Genere: " . $this->genre . "<br><br>";
    }
}

$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, "Crime");
$movie2 = new Movie("Kill Bill: volume 1", "Quentin Tarantino", "2003", "Thriller");
var_dump($movie1);
var_dump($movie2);
$movie1->printMovieDetails();
$movie2->printMovieDetails();