<?php
    // classe
class Movie {
    // proprietà o variabili d'istanza
    public $titolo;
    public $genere;

    public function nomeCompleto() {
        return "$this->titolo $this->genere";

    }
    // costruttore della classe
    public function __construct($titolo, $genere) {
        $this->titolo = $titolo;
        $this->genere = $genere;
    }

    }

    $Titanic = new Movie("Titanic","Drammatico");
    // $Titanic->titolo="Titanic";
    // $Titanic->genere="Drammatico";

    $Lotr = new Movie("Lord of the rings","Fantasy");
    // $Lotr->titolo="Lord of the rings";
    // $Lotr->genere="Fantasy";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>hello oop</h1>
<ul>
    <li><?= $Titanic->nomeCompleto() ?></li> 
    <li><?= $Lotr->nomeCompleto() ?></li>
</ul>

</body>
</html>