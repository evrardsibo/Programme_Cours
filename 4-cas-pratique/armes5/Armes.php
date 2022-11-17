<?php 
 class Armes
 {
    private $name;
    private $image;
    private $description;

    public function __construct($name, $image, $description)
    {
        $this->name = $name;
        $this->image =  $image;
        $this->description = $description;
    }

    public function getName(){ return $this->name ;}
    public function getImage(){ return $this->image ;}
    public function getDescription(){ return $this->description ;}

    public function __toString()
    {
        $arme = $this->name . '<br>';
        $arme .= $this->image . '<br>';
        $arme .= $this->description . '<br>';
        return $arme;
    }
 }