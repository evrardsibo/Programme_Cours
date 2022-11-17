<?php

    class Guns
    {
        private static $increment = 1;
        private static $guns = [];
        private $id;
        private $name;
        private $degats;

        public function __construct($name, $degats)
        {
            $this->id = self::$increment;
            self::$increment++;
            $this->name = $name;
            $this->degats = $degats;
            self::$guns[] = $this;
        }

        public function getId(){ return $this->id ;}
        public function getName(){ return $this->name ;}
        public function getDegat(){ return $this->degats ;}

        public function setName($name){ $this->name = $name ;}
        public function setDegats($degats){ $this->degats = $degats ;}

        public function __toString()
        {
            $gun = 'Id : ' . $this->id . '<br>';
            $gun .= 'Name : ' . $this->name . '<br>';
            $gun .= 'Degats : ' . $this->degats . '<br>';
            return $gun;
        }

        public static function  recoveGun($id)
        {
            foreach(self::$guns as $gun)
            {
                if($id === $gun->id)
                {
                    return $gun;
                }
            }
        }
    }