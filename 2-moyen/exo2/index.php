<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Function"; //Mettre le nom du titre de la page que vous voulez
require_once  '../exo2/logique.php'
?>

<!-- mettre ici le code -->



<div class="row text-center">
    <div class="col">
    <h2>Tableaux 1 :</h2>
    <?php 
        echo arrayToString($array) . '<br>';
        echo "La moyenne est de : " . average($array) . '<br>';
        echo isPair($array) ? " Le tableau contient que des valeurs pairs" : " Le tableaune ne contient pas que des valeurs pairs";
    ?>
    </div>
    <div class="col">
    <h2>Tableaux 2 :</h2>
    <?php 
        echo arrayToString($array1) . '<br>';
        echo "La moyenne est de : " . average($array1) . '<br>';
        echo isPair($array1) ? " Le tableau contient que des valeurs pairs" : " Le tableaune ne contient pas que des valeurs pairs";        
    ?>
    </div>
</div>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
