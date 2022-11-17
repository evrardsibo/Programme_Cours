<?php 
 class Armes
 {
    public $name;
    public $image;
    public $Description;

    public function __construct($name, $image, $description)
    {
        $this->name = $name;
        $this->image =  $image;
        $this->description = $description;
    }
 }