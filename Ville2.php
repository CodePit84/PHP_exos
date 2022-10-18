<?php

class Ville {

    public string $nom;
    public int $departement;


    public function __construct (string $nom, int $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function affichage() 
    {
        return "La ville " . $this->nom . " est dans le département " . $this->departement . ".\n";
    }

}

$ville3 = new Ville("Marseille", 13);
$ville4 = new Ville("Nantes", 44);

echo $ville3->affichage();
echo $ville4->affichage();