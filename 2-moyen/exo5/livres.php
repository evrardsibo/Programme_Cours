<?php
 class Livres{

    private $nom;
    private $edition;
    private $author;
    private $date;

    public function __construct($nom, $edition, $author, $date)
    {
        $this->nom = $nom;
        $this->edition = $edition;
        $this->author = $author;
        $this->date = $date;
    }

    public function getName()
    {
        return $this->nom;
    }

    public function getEdition()
    {
        return $this->edition;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function __toString()
    {
        $book = 'Nom :' . $this->nom .'<br>';
        $book .= 'Edition :' . $this->edition .'<br>';
        $book .= 'Author :' . $this->author .'<br>';
        $book .= 'Date :' . $this->date .'<br>';
        return $book;
    }
    
 }