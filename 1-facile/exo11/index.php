<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Tableau"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $men = ['Matthieu','Pierre','Marc','Jean'];
    //$women = ['Morgane','Mathilde','Julie'];
    $women = [];
    $women[] = 'Morgane';
    $women[] = 'Mathilde';
    $women[] = 'Julie';

    foreach($men as $key => $value)
    {
        echo "$key : $value <br>";
    }

    echo "********************** <br>";

    foreach($women as $key => $value)
    {
        echo "$key : $value <br>";
    }
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
