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
        echo "Genere: " . implode(", ",$this->genre) . "<br>";
    }
}

?>