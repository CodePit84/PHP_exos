<?php

    namespace Firme\Commercial;
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
            $this->coord = $coord;
            // $code = readline ('Entrer le code : ');
            $this->code = $code;
            echo "Les coordonnées du commercial ont été modifiées !";
            echo PHP_EOL;
        }

        public function get()
        {
            return $this->coord . " " . $this->code ;
        }
    }