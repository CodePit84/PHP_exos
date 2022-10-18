<?php
class Personne {

    public string $nom;
    public string $prenom;
    public string $adresse;

    public function __construct(string $nom, string $prenom, string $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }

    public function getpersonne()
    {
        return $this->nom . " " . $this->prenom . "\n" . $this->adresse . "\n" . "\n";
    }

    public function setadresse($newAdresse)
    {
        $this->adresse = $newAdresse;
    }

    public function __destruct()
    {
        exit;
    }
}

$personne1 = new Personne("Doe", "John", "45 rue des fleurs 84200 Carpentras");
$personne2 = new Personne('Dupont', 'Marie', '67 rue du lac 75018 Paris');
$personne3 = new Personne('Mbappé', 'Kylian', '167 rue du Parc 75016 Paris');

// var_dump($personne1);

echo $personne1->getpersonne();
echo $personne2->getpersonne();
echo $personne3->getpersonne();
echo "\n";
echo "Nouvelle adresse de " . $personne2->prenom . " :";
$personne2->setadresse('2 rue nouvelle 84000 Avignon');
echo "\n";
echo "vérif changement de : \n";
echo $personne2->getpersonne();
echo "On détuit la 3ème personne et on l'affiche : \n";
$personne3->__destruct();
echo $personne3->getpersonne();

