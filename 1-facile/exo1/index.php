<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $a = 3;
    $b = 5;
    $c = 7;

    //$a = 5;

    echo 'A :' . $a . '<br>'; 
    echo 'B :' . $b . '<br>';
    echo 'C :' . $c . '<br>';
    echo "***** after ******";
    echo '<br>';
    echo 'A :' . $b . '<br>'; 
    echo 'B :' . $c . '<br>';
    echo 'C :' . $a . '<br>';
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
