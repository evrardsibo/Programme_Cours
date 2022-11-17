<?php ob_start(); //NE PAS MODIFIER 
$titre = "Animals"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php   
    require_once './animalDB.php';

    echo '<pre>';
    print_r(AnimalDbo::image());
    echo '</pre>';

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>