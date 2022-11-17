<?php
 class House{
    private static $increment = 1;
    private $id;
    private $date;
    private $surface;
    private $chambres;

    public function __construct($date, $surface, $chambres)
    {
        $this->id = self::$increment;
        self::$increment++;
        $this->date = $date;
        $this->surface = $surface;
        $this->chambres = $chambres; 
    }  

    public function getId()
    {
        return $this->id;
    }

    public function getSurface()
    {
        return $this->surface;
    }

    public function getchambre(             )
    {
        return $this->chambres;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function __toString()
    {
        $book = $this->id;
        $book .= $this->date ;
        $book .= $this->surface;
        $book .= $this->chambres;
        return $book;
    }
    
 }