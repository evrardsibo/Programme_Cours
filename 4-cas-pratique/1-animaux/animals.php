<?php 
        class Animal{
        private $id;
        private  $nom;
        private  $age;
        private  $sexe;
        private  $type;
        private  $image = [];

        public static $mesAnimaux = []; // un tableau pour conserve nos animaux

        public function __construct($id, $nom, $age, $sexe, $type, $image)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->age = $age;
            $this->sexe = $sexe;
            $this->type = $type;
            $this->image = $image;
            self::$mesAnimaux[] = $this; // ajouter dans le tableau l'animal qu'on vient de creer
        }

        public function getId(){ return $this->id;}
        public function setId($id){ $this->id = $id;}

        public function getNom(){ return $this->nom;}
        public function setNom($nom){ $this->nom = $nom;}

        public function getAge(){ return $this->age;}
        public function setAge($age){ $this->age = $age;}

        public function getSexe(){ return $this->sexe;}
        public function setSexe($sexe){ $this->sexe = $sexe;}

        public function getType(){ return $this->type;}
        public function setType($type){ $this->type = $type;}

        public function getImage(){ return $this->image;}
        public function setImage($image){ $this->nom = $image;}
    }