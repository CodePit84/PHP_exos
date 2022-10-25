<?php
    
    namespace Firme\Client;
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
        
            echo 'dans __set $prop = '. $prop;
            echo "</br>";
            echo 'dans __set $val = '.$val;
            echo "</br>";
            $this->$prop = $val;
        }

        public function __get($prop)
        {
            echo 'dans __get $val = '.$prop;
            echo "</br>";
            return $this->$prop ;
        }







        
        // public function __clone()
        // {
        //     $this->newcoord = clone $this->coord ;
        // }

        // public function __toString()
        // {
        //     return sprintf("Client : $this->coord et code : $this->code");
        // }
    }

