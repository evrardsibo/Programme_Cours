<?php 

    require_once './animalDB.php';
    require_once './animals.php';

    $animaux = AnimalDbo::getAnimalBD();
    foreach($animaux as $animal)
    {
        $type = AnimalDbo::getTypeAnimal($animal['idAnimal']);
        $image = AnimalDbo::getImage($animal['idAnimal']);
        new Animal($animal['idAnimal'], $animal['nom'], $animal['age'], $animal['sexe'], $type, $image);
    }

    //$image = AnimalDbo::getImage(2);

    //echo '<pre>'; print_r($image); echo '</pre>';