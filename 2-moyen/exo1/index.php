<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Tableau a deux dimension "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
 $rows = 10;
 $cols = 10 ;
 echo "<table class=\"table\">";
    for($i=1; $i <= $rows; $i++)
    {
        echo "<tr <?= $i === 1 ? class =\"font-weight-bold\" : '' ?>";
        for($c=1; $c <= $cols; $c++)
        echo "<td <?= $c === 1 ? class =\"font-weight-bold\" : '' ?>" .$i*$c. '</td>';
        echo "</tr>";
    }
 echo "</table>";
?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
