<?php 
 class Armes
 {
    private $name;
    private $level;
    private $description;
    
    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $description
     * @return void
     */
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->level =  2;
        $this->description = $description;
    }
    
    
    /**
     * getName
     *
     * @param  mixed $this-
     * @return void
     */
    public function getName(){ return $this->name ;}    
    /**
     * getLevel
     *
     * @return void
     */
    public function getLevel()
    { 
        $search = ['é','€'];
        $replace = ['e','$'];
        $newreplace = str_replace($search, $replace , $this->name);
        return '../armes6/sources/' . $newreplace . '/' . $newreplace . $this->level . '.png';

    }    
    /**
     * getDescription
     *
     * @param  mixed $this-
     * @return void
     */
    public function getDescription(){ return $this->description ;}
    
    /**
     * __toString
     *
     * @return void
     */
    public function __toString()
    {
        $arme = $this->name . '<br>';
        $arme .= $this->level . '<br>';
        $arme .= $this->description . '<br>';
        return $arme;
    }
 }