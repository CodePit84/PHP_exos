<?php

    namespace Firme\Commercial;
    class Personne
    {
        public $coord;
        protected $code;
    
        public function __construct($coord, $code)
        {
            $this->coord = $coord;
            $this->code = $code;
        }
    
        public function __set($prop, $val)
        {
            echo "Affectation de la valeur $val à la propriété $prop <br /> ";
            $this->$prop = $val;
        }

        public function __get($prop)
        {
            return $this->$prop ;
        }
    }