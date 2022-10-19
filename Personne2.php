<?php

abstract class Personne 
{
    protected $nom ;
    protected $prenom ;
    // abstract protected function __construct() ;
    // abstract protected function __construct($nom, $prenom, $merde) ;
    protected function __construct()
    {
        
    }
}

class Client extends Personne 
{
    protected $nom ;
    protected $prenom ;
    protected $adresse ;

    public function __construct($nom, $prenom, $adresse)
    {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->adresse = $adresse ;
    }

    public function setcoord()
    {
        $coord = "Coordonnées complète : " . $this->prenom . " " . $this-> nom . " " . $this->adresse ;
        return $coord ;
    }

}

class Electeur extends Personne {

    public $nom ;
    public $prenom ;
    public $bureau_de_vote ;
    public $vote;

    public function __construct($nom, $prenom, $bureau_de_vote)
    {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->bureau_de_vote = $bureau_de_vote ;
    }

    public function avoter()
    {
        $this->vote = TRUE; 
    }

}

$client1 = new Client("Doe", "John", "45 rue des fleurs 84200 Carpentras");
// var_dump($client1);

echo $client1->setcoord();
echo PHP_EOL;

$electeur2 = new Electeur('Dupont', 'Marie', 'Paris 18');
$electeur3 = new Electeur('Mbappé', 'Kylian', 'Paris 16');

$electeur2->avoter();
// var_dump($electeur2);

if ($electeur2->vote) {
    echo "$electeur2->prenom $electeur2->nom a voté";
} else {
    echo "$electeur2->prenom $electeur2->nom n'a pas voté";
}

echo PHP_EOL;
// var_dump($electeur3);

if ($electeur3->vote == TRUE) {
    echo "$electeur3->prenom $electeur3->nom a voté";
} else {
    echo "$electeur3->prenom $electeur3->nom n'a pas voté";
}

echo PHP_EOL;

// $client2 = new Client('Dupont', 'Marie', '67 rue du lac 75018 Paris');
// $personne3 = new Personne('Mbappé', 'Kylian', '167 rue du Parc 75016 Paris');