<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 


    $name = 'Evrard';
    $age = 39;
    $homme = true;

    $name1 = 'Belyse';
    $age1 = 34;
    $homme1 = false;

    echo  '<p>'; 
    echo $name. ' ' . $age . 'ans et c\'est une' . ' ' , $homme === true ? 'homme' : 'femme';
    echo '<br>';
    echo $name1. ' ' . $age1 . 'ans et c\'est une' . ' '  , $homme1 === false ? 'femme' :'homme' ;
    echo  '</p>';
?>
    <?= $name1 ?> a <?= $age1 ?> ans et c'est une <?= (!$homme1) ? 'femme' : 'homme' ?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
