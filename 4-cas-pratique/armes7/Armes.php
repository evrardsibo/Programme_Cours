<?php 
 class Armes
 {
    private $name;
    private $level;
    private $description;
    private $maxlevel ;
    
    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $description
     * @return void
     */
    public function __construct($name, $description, $maxlevel)
    {
        $this->name = $name;
        $this->level =  1;
        $this->description = $description;
        $this->maxlevel = $maxlevel;
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
        return '../armes7/sources/' . $newreplace . '/' . $newreplace . $this->level . '.png';

    }    
    /**
     * getDescription
     *
     * @param  mixed $this-
     * @return void
     */
    public function getDescription(){ return $this->description ;}    
    /**
     * getMaxLevel
     *
     * @param  mixed $this-
     * @return void
     */
    public function getMaxLevel(){ return $this->maxlevel ;}


    public function SetMaxLevel($maxlevel){$this->maxlevel = $maxlevel;}
    public function SetLevel($level){$this->level = $level;}
    public function SetName($name){$this->name = $name;}
    public function setDescription($description){ $this->description = $description ;}
    
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