<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Tableau associative "; //Mettre le nom du titre de la page que vous voulez
include_once '../exo3/layout.php';
include_once '../exo3/logique.php';
?>

<!-- mettre ici le code -->
<?php all(); ?>

    
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
