<?php

class Movie {
  public $titolo;
  public $genere;
  public $studio;
  public $anno;

  public function __construct($titolo, $genere, $studio, $anno) {
    $this->titolo = $titolo;
    $this->genere = $genere;
    $this->studio = $studio;
    $this->anno = $anno;
  }

  public function stampaDettagli() {
    echo "Titolo: $this->titolo<br>";
    echo "Genere: $this->genere<br>";
    echo "Studio: $this->studio<br>";
    echo "Anno: $this->anno<br><br>";
    echo "\n";
  }
}

$film1 = new Movie("One Piece", "Shonen", "Toei Animation", 1999);

$film2 = new Movie("L'Attacco dei Giganti", "Azione, Drammatico", "MAPPA", 2013);

echo "Primo film:<br>";
$film1->stampaDettagli();
echo "Secondo film:<br>";
$film2->stampaDettagli();