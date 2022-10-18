<?php

class Ville {

    public string $nom;
    public int $departement;


    public function affichage() 
    {
        return "La ville " . $this->nom . " est dans le département " . $this->departement . ".\n";
    }

    
}

$ville1 = new Ville();
$ville1->nom = "Avignon";
$ville1->departement = 84;

$ville2 = new Ville();
$ville2->nom = "Paris";
$ville2->departement = 75;

echo $ville1->affichage();
echo $ville2->affichage();