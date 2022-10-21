<?php
    
    namespace Firme\Client;
    class Personne
    {
        public $coord;
        public $code;
    
        public function __construct($coord, $code)
        {
            $this->coord = $coord;
            $this->code = $code;
        }
    
        public function set($coord, $code)
        {
            // $coord = readline ('Entrer les coordonnees : ');
            // $code = readline ('Entrer le code : ');
            
            echo PHP_EOL;
            echo "Modification des coordonnées du client : <em>$this->coord</em> par <strong>$coord</strong> et du code <em>$this->code</em> par <strong>$code</strong>" . PHP_EOL;
            $this->coord = $coord;
            $this->code = $code;
            echo "Les coordonnées du client ont été modifiées !";
            echo PHP_EOL;
        }

        public function get()
        {
            return $this->coord . " " . $this->code ;
        }
    }

// $client1 = new Personne('toto', 'tata');
// echo $client1->get();
// echo PHP_EOL;
// $client1->set('coordonees de fou', '12code34');
// echo $client1->get();
// echo PHP_EOL;