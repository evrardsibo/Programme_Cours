<?php
    class Players
    {
        private $name;
        private $force;
        private $pv;
        private $idGun;

        public function __construct()
        {
            $this->force = 5;
            $this->pv = 100;
        }

        public function getName(){ return $this->name ;}
        public function getForce(){ return $this->force ;}
        public function getPv(){ return $this->pv ;}
        public function getIdGun(){ return $this->idGun ;}

        public function setName($name){ $this->name = $name ;}
        public function setsetForce($force){ $this->force = $force ;}
        public function setPv($pv){ $this->pv = $pv ;}
        public function setIdGun($idGun){ $this->idGun = $idGun ;}




        public function __toString()
        {
            $gun = Guns::recoveGun($this->idGun);
            $player = 'Name : ' . $this->name . '<br>';
            $player .= 'Force : ' . $this->force . '<br>';
            $player .= 'Pv : ' . $this->pv . '<br>';
            $player .= 'Arme : ' . $this->idGun . '<br>';
            $player .= $gun;
            return $player;
        }
    }